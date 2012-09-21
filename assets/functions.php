<?php

	function generate_nav($path, $url, &$nav, $i = 0)
	{

		global $ignore;

		if ( $handle = opendir($path) )
		{

		    while ( false !== ( $entry = readdir($handle) ) )
		    {

		        if ( ! in_array($entry, $ignore) )
		        {
		            
		            if( is_dir($path.'/'.$entry) )
		            {

		            	$next_path   = $path.'/'.$entry;
		            	$nav[$entry] = array();

		            	if( $entry == $url[$i] )
		            	{
		            		generate_nav($next_path, $url, $nav[$entry], ($i+1));
		            	}

		            }
		            else
		            {

		            	$nav[] = $entry;

		            }

		        }

		    }

		    closedir($handle);
		}

	}

	function build_nav($nav, $html = '', $url = '', $before = '', $level = 0)
	{

		global $root;

		foreach ( $nav as $key => $item )
		{

			if ( is_array($item) )
			{
				
				// Get information
				$content      = file_get_contents($root.$url.'/'.$key.'/index.md');
				$tags         = parse_tags($content);
				$title        = ( isset($tags['title']) ? $tags['title'] : ucwords(str_replace('-', ' ', $key)) );

				// Build header links
				$next_url     = $url.'/'.$key;
				$next_before .= ( $level >= 1 ? "\t" : '' );
				$html        .= $before.( $next_before == '' ? '###' : '*' )." [{$title}]({$url}/{$key}/)\n";

				// Send to sub-loop
				$html    = build_nav($nav[$key], $html, $next_url, $next_before, ($level+1));

			}
			else
			{

				// Get information
				$content      = file_get_contents($root.$url.'/'.$item);
				$tags         = parse_tags($content);
				$title        = ( isset($tags['title']) ? $tags['title'] : ucwords(str_replace(array('-', '.md'), array(' ', ''), $item)) );

				// Build link
				$item  = str_replace('.md', '', $item);
				$html .= $before."* [{$title}]({$url}/{$item})\n";
			}

		}

		return $html;
	}

	function parse_tags($content)
	{

		// Variables
		$return = array();

		// Match notation
		preg_match_all("#( \* @([a-z]+) (.+?))+\n#s", $content, $result);

		if ( ! empty($result[3]) )
		{

			// Loop and assign
			for ( $i = 0; $i < count($result[0]); $i++ )
			{
				$return[$result[2][$i]] = trim($result[3][$i]); 
			}

		}

		// Return
		return $return;
	}

	function prepare_content($content, &$main_title, &$keywords, &$description)
	{

		// Get tags
		$tags = parse_tags($content);
		extract($tags);

		// Update title
		if( isset($title) )
		{
			$main_title .= $title;
		}

		// Remove tags
		$content = preg_replace('%/\*\*.+?\*/%si', '', $content);

		// Parse content
		$content = Markdown($content);

		// Return stripped content
		return $content;
	}
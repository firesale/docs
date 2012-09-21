<?php

	// Variables
	$title     = 'FireSale | ';
	$keywords  = '';
	$desc      = '';
	$ignore    = array('.', '..', '.htaccess', 'sftp-config.json', 'assets', 'nav.md', 'index.md', 'readme.md');
	$root      = $_SERVER['DOCUMENT_ROOT'] . '/';
	$nav_cache = $root.'assets/nav.md';

	// Start build time
	$time  = explode(' ', microtime());
	$start = $time[1] + $time[0];

	// Include files
	require('markdown.php');
	require('functions.php');

	// Check file is set
	if ( isset($_GET['f']) )
	{

		$file  = $root . $_GET['f'];
		$file .= ( is_dir($file) ? 'index' : '' ) . '.md';

		if ( file_exists($file) )
		{

			// Format given file
			$content = file_get_contents($file);
			$content = prepare_content($content, $title, $keywords, $desc);

		}

	}
	else
	{

		$file = $root . 'index.md';

		if ( file_exists($file) )
		{

			// Format given file
			$content = file_get_contents($file);
			$content = prepare_content($content, $title, $keywords, $desc);

		}

	}

	// Navigation cache file
	$cache = $root.substr($_GET['f'], 0, strrpos($_GET['f'], "/") ).'/nav.md';

	// Build navigation
	if ( ! file_exists($cache) or ( file_exists($cache) and filemtime($nav_cache) <= ( time() - 86400 ) ) or isset($_GET['r']) )
	{

		// Forced rebuild?
		if ( isset($_GET['r']) )
		{
			echo '<center><h3>Rebuilt!</h3></center>';
		}

		// Create cache file
		$handle = fopen($cache, 'w');
		fclose($handle);
		chmod($cache, 0777);

		// Generate new navigation
		$path = explode('/', $_GET['f']);
		$nav  = array();
		generate_nav($root, $path, $nav);
		$nav  = build_nav($nav);
		$nav  = Markdown($nav);

		// Cache it
		file_put_contents($cache, $nav);

	}
	else
	{
		// Retrieve from cache
		$nav = file_get_contents($nav_cache);
	}

	// Select current page
	$nav = str_replace('/'.$_GET['f'].'"', '/'.$_GET['f'].'" class="selected"', $nav);

	// Build page
	if( isset($content) )
	{
		$page = file_get_contents('template/index.html');
		$page = str_replace('{{ content }}', Markdown($content), $page);
	}
	else
	{
		$page = file_get_contents('template/404.html');
	}

	$page = str_replace('{{ title }}', $title, $page);
	$page = str_replace('{{ description }}', $desc, $page);
	$page = str_replace('{{ keywords }}', $keywords, $page);
	$page = str_replace('{{ navigation }}', $nav, $page);

	// End build time
	$time = explode(' ', microtime());
	$end  = $time[1] + $time[0];
	$page = str_replace('{{ build_time }}', round(( $end - $start), 4), $page);

	// Output page
	echo $page;
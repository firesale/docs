{{ noparse }}

The categories plugin is a great way to get a list of your categories for navigation, sidebars, or anywhere else you'd like them. It has a number of options to get exactly what you want to display and provides a complete category object for you to display, more information on the data you have available can be found [here](/documentation/themeing/categories#objects); however you do not need to prefix the items with category.

### Usage

The basic tag does not require any options and can be used as follows:

	{{ firesale:categories }}
		...
	{{ /firesale:categories }}

By default this will return the first six categories in the order they are listed in your control panel, however there are a number of customisation options available to filter and sort them into a more ordered list fit for your purposes. The available attributes are listed below and can be used on any of the categories plugins; the primary or sub-plugins.

Option | Default | Information
------- | ------- | -----------
limit | 6 | Limits the number of categories returned
parent | 0 | The ID of the parent category you want to return, 0 means no parent
where | FALSE | An SQL where clause in the format of, column=value
order-by | ordering_count | The column to order the categories on
order-dir | asc | The direction ordering should be done
exclude-empty | 0 | Ignore empty categories, 1 or 0

#### Sub-plugins

Due to an issue with the LEX parser you cannot (or could not, this may have been fixed) nest the same tag within itself. To combat this we added two additional tags that function in the exact same was as the one listed above to allow you to get down to the third level of nested categories and these can be used as follows:

##### Second Level

	{{ firesale:categories }}
		...
		{{ firesale:sub_categories parent=id }}
			...
		{{ /firesale:sub_categories }}
	{{ /firesale:categories }}

##### Third Level

	{{ firesale:categories }}
		...
		{{ firesale:sub_categories parent=id }}
			...
			{{ firesale:sub_sub_categories parent=id }}
				...
			{{ /firesale:sub_sub_categories }}
		{{ /firesale:sub_categories }}
	{{ /firesale:categories }}

### Examples

With the basic plugin usage and options set out, here are a few examples of how they can be used.

#### Navigation

On many sites the categories of the store will replace the main navigation and here's a basic example of how to achieve this with the basic plugin tags. It also includes a second-level of categories for a drop-down type menu system; it doesn't however go to a third level.

	<nav>
		<ul>
			<li class="home"><a href="{{ url:site }}">Home</a></li>
		{{ firesale:categories order-by='title' order-dir='asc' limit='6' }}
			<li>
				<a href="{{ firesale:url route='category' id=id }}">{{ title }}</a>
				<section class="sub">
					<h3>Inside {{ title }}</h3>
					<ul>
					{{ firesale:sub_categories parent=id order-by='title' order-dir='asc' limit='0' }}
						<li><a href="{{ firesale:url route='category' id=id }}">{{ title }}</a></li>
					{{ /firesale:sub_categories }}
					</ul>
				</section>
			</li>
		{{ /firesale:categories }}
		</ul>
	</nav>

> This example also tags advantage of the URL plugin to make all links dynamic and updated via routes.

#### Sidebar

This is a small example of how to display a sidebar of categories, we do provide a widget for this but if you're looking for more customisation you can use the following example as a guideline for achieving it.

	<h2>Categories</h2>
	<ul>
	{{ firesale:categories limit='10' }}
		<li>
			<a href="{{ firesale:url route='category' id=id }}">{{ title }}</a>
			<ul>
			{{ firesale:sub_categories parent=id limit='10' }}
				<li><a href="{{ firesale:url route='category' id=id }}">{{ title }}</a></li>
			{{ /firesale:sub_categories }}
			</ul>
		</li>
	{{ /firesale:categories }}
	</ul>

{{ /noparse }}
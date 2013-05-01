{{ noparse }}

The products plugin allows you to display a range of products anywhere on your store and is a little different to the others we use because it has no real predefined attributes, instead it uses any attributes you define to build up an SQL query to retrieve product objects. There is of course a definite list of attributes you can select due to the table but not in the sense that the other plugins do. A number of these key elements are listed below but you're free to build a query based on anything in the products table as well as a few extras.

### The Basics

The basic plugin tag that you can use is as follows:

	{{ firesale:products limit="10" }}
		...
	{{ /firesale:products }}

Without setting a limit the plugin will pull out all products and is highly recommended that you set this value.

> For more information on what is accessible within this loop you can take a look at the product object documentation [here](/documentation/themeing/products) and the same tags are available, but do not need to be prefixed with product.

### The Possible Options

As stated this plugin doesn't have any set-in-stone attributes, but like any SQL query you do have a few items that are available such as limit, order and in this case category. Further than that you can define any where clause based on the product table and a few examples are listed below:

Key | Value | Information
--- | ----- | -----------
limit | Integer | Limits the number of products returned
order | column direction | The column name and asc/desc, eg "title desc"
category | Category ID | The parent category to show products from

> These are just the basics and along with them you can define any column and value, eg: id="1" or title="example" and from these the plugin builds up an SQL query to return the objects you require.

### Example Usage

For this example you'll see how to display a listing of the 3 most recent products, generally this would be displayed on the front-page but can be placed anywhere you wish.

	{{ firesale:products limit="3" order="created desc" }}
	<div class="product small">
		<div class="image">
			<a href="{{ firesale:url route=">
			{{ if image }}
				<img src="{{ url:base }}files/thumb/{{ image }}/300/200/1" alt="{{ title }}" />
			{{ else }}
				{{ theme:image file="no_image.png" alt="No Image" }}
			{{ endif }}
				<span>
					<strong>{{ title }}</strong>
					<em>{{ category.0.title }}</em>
				</span>
			</a>
		</div>
	</div>
	{{ /firesale:products }}

{{ /noparse }}

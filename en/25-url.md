{{ noparse }}

The URL tag allows almost all aspects of your store to have the URLs dynamically generated and all changed whenever the routes are updated via the control panel. Rather than hard-coding a URL into your theme you can use this tag and no longer have to worry about updating items to match your administration settings.

### The Tag

This is the tag that should be used in your theme files and will always return a URL that is relative to your site, so you don't need to worry about using {{ url:site }} before it.

	{{ firesale:url route="ROUTE SLUG" [id="ITEM ID"] }}

There are two parameters that can be passed to the tag, firstly the route slug you want to use which is required and secondly the ID of the item you wish to use and is optional. When creating or editing a route, the slug is generated and displayed on the dashboard of the routes section in the control panel and is used to reference the slug you want to pull out for all items. The ID is only required for URLs like products, categories, brands, etc. Routes like the cart or addresses do not require them as they are generalised.

### Usage

The URL tag is a single tag and simply returns a URL rather than requiring a loop, you can call it inside of an anchor tag to link to pages or in a form to define the action, both of which are detailed below.

#### A Simple Link

For most sites the simple link is the most commonly used way to deploy the tag and is aimed for static pages such as the cart, addresses, etc. and can be done like so:

	<a href="{{ firesale:url route='cart' }}">Cart</a>

	or for a form like so:

	&lt;form method="post" action="{{ firesale:url route='cart' }}"&gt;
		...
	&lt;/form&gt;

Once processed this will be parsed as:

	<a href="SITE_URL/cart">Cart</a>

	or

	&lt;form method="post" action="SITE_URL/cart"&gt;
		...
	&lt;/form&gt;

If you want to link to another part of the cart process or to insert an item you can do the following 

	<a href="{{ firesale:url route='cart' }}/insert/PRODUCT ID/1">Add to Cart</a>

Where PRODUCT ID is replaced by the product ID you want to insert, generally this would be {{ id }}

#### A Specific Link

These URLs are designed to target dynamic pages like products, categories etc. and can be used as follows:

	<a href="{{ firesale:url route='product' id='1' }}">PRODUCT NAME</a>

Once processed (by default) this will be parsed as:

	<a href="SITE_URL/product/ID">PRODUCT NAME</a>

After modifying the routes you can add a number of extra features to these URLs such as the categories, product slug or name, or ID.

### Available Routes

When FireSale is installed it adds a number of routes by default and below is a complete list of these as well as information on what they're used for and the requirements.

Title | Slug | ID Required | Information
----- | ---- | ----------- | -----------
Category (Customisation) | category-custom | No | Used to link to sorting and layout options for category display
Category | category | Yes | Links to a category
Product | product | Yes | Links to a product
Cart | cart | No | Links to the main cart page, with additional items to other cart pages
Orders | orders | No | Links to the users order details
Orders (Single) | orders-single | Yes | Links to a users single order
Addresses | addresses | No | Goes to users addresses, additional items goes to creation
Currency | currency | Yes | Links to changing a users currency option
Brands | brands | Yes | Links to a brand page

> These are just the routes added on installation, additional modules may add their own as well as user created routes are not shown here

{{ /noparse }}
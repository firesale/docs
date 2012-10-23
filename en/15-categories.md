{{ noparse }}

The category pages are the hub of your products and are where users are able to browse through and find items relevant to their needs. They are important sections to any store and we have attempted to add as much information as may be required, before getting started you should acquaint yourselves with the [concepts](/documentation/themeing/concepts/) we use throughout these sections.

### Basics

In your theme you will need to create the following document:

	views/modules/firesale/category.php

This will overload the default view we have created and allow you to take full-advantage of all the objects we have provided to the page.

### Objects

Objects are groups of data that have been passed to the page to be used directly with lex, requiring almost no programming and certainly no PHP knowledge. They can be called almost anywhere on the page quickly and simply, containing all of the information you will need to fill out your pages with all the content you can!

#### Overall

The overall category object contains all of the data provided by the user for the given category and is accessible entirely through lex tags under the category.* prefix. A full list of these tags that can be used are below:

Tag | Type | Description
--- | ---- | -----------
{{ category.id }} | Single | The ID of the current category
{{ category.title }} | Single | The title of the current category
{{ category.slug }} | Single | The URL slug of the current category
{{ category.description }} | Single | The description of the current category
{{ pagination.links }} | Single | Pagination list for the current category


#### Products

In this document to display the products we have provided a complete product object, rather than just the basics, to allow for the complete customisation of your pages we provide all of the information about them, again all accessible via lex tags. To begin simply start your loop as follows:

	{{ products }}
		Product object accessible here
	{{ /products }}

Within these tags these are some of the more common items you will have access to, the complete listing can be found on the product page documentation [here](/documentation/themeing/products). Unlike the root category data, the product object does not have to be prefixed.

Tag | Type | Description
--- | ---- | -----------
{{ id }} | Single | The product ID
{{ code }} | Single | The product code
{{ title }} | Single | The product title
{{ slug }} | Single | The product slug, used for URLs
{{ rrp }} & {{ rrp_tax }} | Single | The products retail price, with and without tax respectively
{{ price }} & {{ price_tax }} | Single | The products current price, with and without tax
{{ description }} | Single | The complete description for a product
{{ snippet }} | Single | The description limited to 25 words and without any HTML
{{ image }} | Single | The primary image ID for the product

### Example

Below is an example (taken from our default views) on how to use the more basic elements on the product object and how to create a loop to display them. By default we pass 15 products to the category page, but this can be changed from within the settings depending on your requirements.

	{{ if products }}
		{{ products }}
			<article>
			{{ if ! image  }}
				<div class="no_image_180"></div>
			{{ else }}
				<a href="{{ firesale:url route='product' id=id }}"><img src="{{ url:site }}files/thumb/{{ image }}/180/180" alt="{{ title }}" /></a>
			{{ endif }}
				<section class="price-round medium"><span class="rrp">{{ if rrp > price }}{{ rrp }}{{ endif }}</span><span class="price">{{ price_formatted }}</span></section>
				&lt;header&gt;
					<h3><a href="{{ firesale:url route='product' id=id }}">{{ title }}</a></h3>
					<em>{{ code }}</em>
				&lt;/header&gt;
				<p class="description">{{ snippet }}</p>
				<footer>
					<a href="{{ firesale:url route='cart' }}insert/{{ id }}/1" class="basket"><span class="icon"></span>Add to Basket</a>
				</footer>
				<br class="clear" />
			</article>
		{{ /products }}
	{{ else }}
		<center><h3>No Products Found!</h3></center>
	{{ endif }}

In the example you will note that the entire loop is wrapped in a conditional tag, this is the easiest method to display a message for an empty category and gives you a chance to show a nice message to the user rather than just leaving them looking at a blank page.

For the URLs you will see the use of the {{ firesale:url }} plugin, this is a new system introduced in 1.1 to allow you to dynamically change all of your URLs from within the administration panel. By using these tags, rather than hard-coding them, any changes you make in the back-end will be instantly updated and effective on the front, meaning no extra work on your, or the designers part.

{{ /noparse }}
{{ noparse }}

The products page is your chance to display your products strength and really sell it to the user, all of the information you could want is already passed to the page for whatever layout you may wish to use. Through the use of lex tags you can style and layout your page to look amazing without ever writing a line of PHP, allowing designers and developers to get their store ready in no time.

### Core Product Details

As with most of our pages you'll be passed a range of objects to display all of the relevant information about a product, it's associated categories and imagery. Accessing these is very simple and can be done with nothing but lex tags. The main items featured in the product object are below. Each of them are prefixed with product.* to avoid conflicts with other variables that may be passed to the page, as well as remaining usable in loops, conditionals etc.

Name | Type | Description
---- | ---- | ------------
{{ product.id }} | Single | The product ID
{{ product.code }} | Single | The product code
{{ product.title }} | Single | The product title
{{ product.slug }} | Single | The product slug, used for URLs
{{ product.rrp }} & {{ product.rrp_tax }} | Single | The products retail price, with and without tax respectively
{{ product.price }} & {{ product.price_tax }} | Single | The products current price, with and without tax
{{ product.description }} | Single | The complete description for a product
{{ product.snippet }} | Single | The description limited to 25 words and without any HTML
{{ product.image }} | Single | The primary image ID for the product
{{ product.status }} | Array | The product status, acceptable options are key and value
{{ product.stock }} | Single | The current stock level for the product
{{ product.stock_status }} | Array | The name for the stock status, available options are key and value
{{ product.price_formatted }} | Single | The products price formatted to the selected currency
{{ product.price_tax_formatted }} | Single | As above, without tax
{{ product.rrp_formatted }} | Single | You seeing a pattern yet?
{{ product.rrp_tax_formatted }} | Single | Again, as about but without tax

Within the product object there are two more special objects, these are currency and categories. They are complete objects of their respective type and contain all of the information about the currency in use by the user for this product as well as all of the complete category objects that the product has associate with it. More information about these objects is featured later in this document for your reference

### Images

Images is an additional object passed to the page that is outside of the product object and contains all of the images and their related information; not just a single ID like the product object. Because we are fully integrated into the Files module this object contains off the data that you'd expect and a complete listing can be found [here](http://docs.pyrocms.com/2.1/manual/plugins/files) listed under Image Usage.

To use the images you simply need to use the following tags and you will have access to all of the information:

	{{ images }}
		<img src="{{ url:base }}files/large/{{ id }}/{{ width }}/{{ height }}" alt="{{ title }}" />
	{{ /images }}

### Category Object

### Currency Object



{{ /noparse }}
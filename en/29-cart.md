{{ noparse }}

The cart plugin was designed to make the complete cart object available to every page so it can be shown in the header and give users their cart total, basket items, etc. It doesn't require any attributes and simply sends back information. The basic usage of which is started by using the following tags:

	{{ firesale:cart }}
		...
	{{ /firesale:cart }}

### Information

We have provided a range of information for this plugin and it should be the right amount for what this type of usage requires.

Tag | Type | Description
--- | ---- | -----------
{{ sub }} | Single | The sub-total of the cart
{{ tax }} | Single | The cost of the tax on the current cart
{{ total }} | Single | The total price of the current cart
{{ count }} | Single | The number of products in the cart
{{ products }} | Object | The current products in the cart

Due to the type of display that is generally associated with this plugin we did not feel it was necessary to include a complete product object and instead opted to return a basic amount of information. The details are accessible within {{ image }}...{{ /image }} tags and the information you can use is listed below:

Tag | Type | Description
--- | ---- | -----------
{{ id }} | Single | The product ID
{{ code }} | Single | The product code
{{ slug }} | Single | The products URL slug
{{ quantity }} | Single | The quantity of the product in the current cart
{{ name }} | Single | The products name

### Example Usage

Below is a basic example of how you could list the cart total and products in the header of your site, there is a lot of customisation that can be done to fit your specific needs but this shows most of the tags and data available to you.

	{{ firesale:cart }}
	<div class="cart">
		<a href="{{ firesale:url route='cart' }}">{{ total }}</a>
		<div class="dropdown">
		{{ if products }}
			<ul class="products">
			{{ products }}
				<li>
					<a href="{{ firesale:url route='cart' }}/remove/{{ id }}">Remove</a>
					<strong>{{ quantity }}x</strong>
					<a href="{{ firesale:url route='product' id=id }}">{{ name }}</a>
				</li>
			{{ /products }}
			</ul>
			<ul class="total">
				<li><label>Subtotal</label>{{ sub }}</li>
				<li><label>Tax:</label>{{ tax }}</li>
				<li><label>Total:</label>{{ total }}</li>
			</ul>
			<a href="{{ firesale:url route='cart' }}" class="button">View Cart</a>
			<a href="{{ firesale:url route='cart' }}/checkout" class="button">Checkout</a>
		{{ else }}
			<center>No items in your cart</center>
		{{ endif }}
		</div>
	</div>
	{{ /firesale:cart }}

{{ /noparse }}
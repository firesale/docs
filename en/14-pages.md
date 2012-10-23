Once you have installed the core modules (and certain additional modules) of FireSale you will have a number of new pages added to your install - none of them are added to navigation by default but by using the URIs listed below you can add them.

All of the pages will feature more information than is displayed by default and many forms can be replicated via URI calls to the API - giving you full control over the functionality, look and feel of your store. All information provided to the pages can be used by LEX to make managing and creating your theme so fast, efficient and easy that almost anyone could integrate a full theme in a few hours.

### Category

* Installed By: Core
* Page URI: /category/SLUG
* Template File: category.php

The category page is designed to display a range of products contained either in a category or a sub-category if the current parent has children. The pages are fully paginated and will display the number of products as defined in your settings in the PyroCMS administration panel.

#### Re-Styling and Re-Ordering
Optionally you can also set up re-ordering and re-styling of views based on a number of features which can be set via Ajax or by URI at either of the following URLs:

* /category/order/ID
* /category/style/grid or list

These two options will then set a cookie to store the option throughout the subsequent page views and reloads to keep things consistent. You can easily retrieve the options with functions provided in the general helper included with the core to return the sort by values as well as the class for each viewing option.

### Product

* Installed By: Core
* Page URI: /product/SLUG
* Template File: product.php

This is the page where all of the details for a given product or series of products will be shown, provided with a complete product object you can use LEX to power all elements on this page with a number of extra modules giving you great choices for additional features or up-selling of your products. Almost all of the information that you have stored about a given product will be returned to this page on the front-end giving you great control over every aspect of the functionality as well as the ability to either submit via Ajax or form to add a given product to the cart.

### Cart

* Installed By: Core
* Page URI: /cart
* Template file: cart.php

On this page all items currently in the users cart with options to update, remove and purchase items. Using a number of different API calls you can either submit directly to the cart with your updates or use links to remove/increase the items in your cart, including via Ajax. 

### Checkout

* Installed By: Core
* Page URI: /cart/checkout
* Template File: checkout.php

### Payment

* Installed By: Core
* Page URI: /cart/payment
* Template File: payment.php

### Payment Redirection

* Installed By Core
* Page URI: /cart/payment/GATEWAY SLUG
* Template File: payment_redirection.php

### Payment XXX

* Installed By: Core
* Page URI: /cart/payment_xxx
* Template File: payment_xxx.php

xxx = Payment status, success, failed, etc.

### Addresses

* Installed By: Core
* Page URI: /users/addresses
* Template File: addresses.php

### Address Management

* Installed By: Core
* Page URI: /users/addresses/create|edit
* Template File: address_create.php

### Orders

* Installed By: Core
* Page URI: /users/orders
* Template File: orders.php

### View Order

* Installed By: Core
* Page URI: /users/orders/ID
* Template File: orders_single.php
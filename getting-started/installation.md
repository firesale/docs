/**
 * @title Installation
 * @keywords pyrocms, ecommerce, store, shop, firesale, documentation
 * @description description content goes here
 */
# Installation

Like most [PyroCMS](http://www.pyrocms.com) modules we've kept the installation process to the bare minimum, simply follow these steps and you'll be up and running with your store in no time!

### Installation Steps

1. Drop the required modules into either your sites module folder or shared_addons/modules
2. In your admin panel navigate to the add-ons section
3. Make sure you install the [FireSALE](http://www.getfiresale.org) Core before any additional modules
4. Once that is done you can install the others
5. Below is a list of routes you need to install either manually or by using the great routes module
6. Still in admin goto settings and find the FireSALE tab and set your required options, details or which are featured below

Once this has been done your store is ready to use and you can start adding products and categories.

### Routes

The following routes must be added to your system/cms/config/routes.php file, in the near future we will attempt to do this automatically during installation.

	$route['category/(order|layout)/([0-9]+)'] = 'firesale/front_category/$1/$2';
	$route['category(:any)']          		   = 'firesale/front_category/index$1';
	$route['product(:any)']           		   = 'firesale/front_product/index$1';
	$route['search(:any)?']           		   = 'firesale_search/search/index$1';
	$route['cart(:any)?']             		   = 'firesale/cart$1';
	$route['users/orders/([0-9]+)']   		   = 'firesale/front_orders/view_order/$1';
	$route['users/orders']            		   = 'firesale/front_orders/index';
	$route['users/addresses(/:any)?'] 		   = 'firesale/front_address$1';

Other modules may need additional routes but these are the ones required for the core features of the module.

### Settings

Additional modules will add more options and details are provided on their respective documentation pages.

Name | Description | Options
-----|-------------|--------
Tax Percentage | This is the additional cost that will be applied to your products during creation and can be toggled on or off on these pages. | Float, default 20
Make Images Square | When images are uploaded this will make them sqaure depending on their largest dimension. This is required for many layouts to keep things consistent. | Yes or No, default No
Products per Page | How many products to display on category and search pages. | integer, default 15
Currency Code | The ISO-4217 code for your selected currency. This does not change your currency symbol as we use the one specified in the default Pyro settings | String, 3 characters, default GBP


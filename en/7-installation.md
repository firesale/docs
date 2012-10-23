Like most [PyroCMS](http://www.pyrocms.com) modules we've kept the installation process to the bare minimum, simply follow these steps and you'll be up and running with your store in no time! As stated we'll presume you've already got a copy of FireSale and PyroCMS is installed.

### Requirements

Before attempting installation please ensure you meet the following requirements and you have:

1. PyroCMS Version 2.1.4 or greater
2. The [Multiple Relationship](https://github.com/parse19/PyroStreams-Multiple-Relationships) field type pre-installed (we'll try and do this for you, but sometimes that's just not possible)

### Installation Steps

1. Upload the FireSale modules to your shared_addons or addons/default module folder
2. Within your administration panel, navigate to Addons, find FireSale and press Install
3. All done, easy wasn't it?!

#### Optional Steps

After FireSale is installed you can also install the two additional modules provided with the core to enable Shipping and Search. These require no extra requirements and should just work after being enabled.

### Settings

Once installed FireSale will add a number of options to the PyroCMS Settings menu, here you'll find some handy configuration options to customise your store. Most of these are simple choices about layout etc. but if you want to use Multiple Currency and have it automatically update you'll need an API key, you can find out more about that in the dedicated section [here](/documentation/basics/the-control-panel/currency).

Below is a list of the options, their description and potential values.

Name | Description | Options | Default
-----|-------------|--------|------
Tax Percentage | This is the additional cost that will be applied to your products during creation and can be toggled on or off on these pages. | Float | 20
Make Images Square | When images are uploaded this will make them square depending on their largest dimension. This is required for many layouts to keep things consistent. | Boolean | No
Image Background Colour | When images are resized this is the background colour they will have. | String (6) | FFFFFF
Require Login | The is a simple option that will require users to be logged in before they can purchase any products. They can still see them, just not buy. | Boolean | No
Products per Page | How many products to display on category and search pages. | Integer | 15
Currency Code | The ISO-4217 code for your selected currency. This does not change your currency symbol as we use the one specified in the default Pyro settings | String (3) | GBP

### What's Next?

Once you have FireSale set-up and your configurations as you want them, it's time to start setting up your categories, products, shipping options and optionally currencies and routes! You can follow the guides in the [Basics](/documentation/basics) section in almost any order and they should help you with every aspect of getting your store ready for sales. We've listed a few of the more common ones below for your reference.

* [Managing Categories](/documentation/basics/the-control-panel/categories)
* [Creating Products](/documentation/basics/the-control-panel/products)
* [Viewing Orders](/documentation/basics/the-control-panel/orders)
* [Shipping Bands](/documentation/basics/the-control-panel/shipping)
* [Currency Configuration](/documentation/basics/the-control-panel/currency)
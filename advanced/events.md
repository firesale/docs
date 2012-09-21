/**
 * @title Events
 * @keywords pyrocms, ecommerce, store, shop, firesale, documentation
 * @description description content goes here
 */
# Events

Much of what makes FireSale tick is the quite extensive use of events to allow additional modules hook into key processes that the core may perform such as product creation, page views, etc. This allows you to create modules that can simply be dropped in and just function without the need to modify anything within the core.

Each event returns all of the information the should be required by each process to perform the given actions such as passing all post inputs including the product ID to the product_updated event or the current template object being passed to page_build events.

### Core Events

Event Name | Description | Data Passed
-----------|-------------|------------
product_created | When a new product has been created in the administration panel | ???
product_updated | When a product has been updated this event is fired to give additional modules that need to do extra processing a chance to do just that | The product ID as well as the complete post object
product_deleted | When a product has been deleted this is fired to allow for clearing out of data outside of the base stream tables | The product ID
product_duplicated | When a product has been created via duplication | The original product ID and the new product ID
product_viewed | Whenever a user goes onto a product page | The product ID and slug currently being viewed
order_complete | ??? | ???
cart_item_added | ??? | ???
cart_updated | ??? | ???
page_build | This is fired when any front-end (and certain admin) pages are viewed by a user to modify the page in specific ways. It is the last thing to happen before a page is viewed so anything set here is final. | The page template object

### Missing Events

If you are a module developer and would like a specific event put in to make a core piece of your functionality work please put in a pull request to our GitHub account. We will consider each request and accept/decline it based on the benefit and security issues to users, clients and customers.

We are trying to keep events to the bare minimum to make only very important functions work - so if your pull request deals with something VERY specific and of little value outside of one module there is a good chance it will be declined. Try to keep this in mind before developing a module based around a feature before putting in a pull request.
We're not tracking changes prior to version 1.0.2, if you are interested in finding any of the changes that were made before this you can view the commits made from version 0.9.5 onwards - anything before that wasn't tracked because we were awesome and developed everything on Dropbox...go team lunacy!

### Version 1.1.0
* *Additions*
	* Added custom route mapping for all FireSale pages
	* Added multiple currency options, driven by the open exchange API
	* Added basic multi-tax rate system
	* Added 5 new payment gateways
	* Added many install checks to easier debug installation issues with the core
	* Added automatic route installation
	* Added run-time caching to most core models
	* Added option to force users to login before purchase
* *Improvements*
	* Updated CI-Merchant library with a host of new features
	* Redesigned administration section that is fully responsive
	* Rebuilt the filtering options for many pages and is now ajax based
	* Almost all languages improved
	* Better image upload error handling
	* Updated product/category modifications with complete validation checks
	* Now correctly runs in sub-directory installs
* *Bug Fixes*
	* [Issue #136](https://github.com/firesale/FireSale/issues/136) - Can't checkout with a £0.00 cart
	* [Issue #131](https://github.com/firesale/FireSale/issues/131) - Items fail to appear in cart
	* [Issue #130](https://github.com/firesale/FireSale/issues/130) - Fixed tax calculation
	* [Issue #128](https://github.com/firesale/FireSale/issues/128) - Unable to view certain products that were draft
	* Additional, none disclosed bugs

### Version 1.0.4
* *Additions*
	* Added a new email template for dispatched orders
* *Improvements*
	* Reverted a number of unnecessary "hacks" to our events system
	* Greatly modified the email templates to contain products, addresses, etc.
	* Added a redirect for the address page when no user is logged in
	* Default templates are now fully language compatible
	* A number of new/improved translations have been updated
	* Templates should now correctly use url:base and should now run correctly in a sub-directory
* *Bug Fixes*
	* [Issue #107](https://github.com/firesale/FireSale/issues/107) - Problem in the Order page in admin
	* [Issue #104](https://github.com/firesale/FireSale/issues/104) - checkout "Previous" problem
	* [Issue #91](https://github.com/firesale/FireSale/issues/91) - Product list in Admin
	* Additional, none disclosed bugs

### Version 1.0.3

* *Additions*
	* Added the ability to tag products as Unlimited stock status
	* Added the option to require users to be logged in to purchase
* *Improvements*
	* Updated the image upload scripts to give better feedback on errors
	* Updated language files with new translations and added many missing keys
	* Updated front-end views to use language items (thanks Christian)
	* Updated support for Unlimited product stock within orders
	* Updated a small security patch for orders
	* Updated orders to remove those with no items
* *Bug Fixes*
	* [Issue #99](https://github.com/firesale/FireSale/issues/99) - Product 404 page bug
	* [Issue #93](https://github.com/firesale/FireSale/issues/93) - Cart - do not respect the quantity bug
	* [Issue #90](https://github.com/firesale/FireSale/issues/90) - Category list issue bug
	* [Issue #89](https://github.com/firesale/FireSale/issues/89) - Error on completion of payment with Firesale Dummy gateway bug
	* [Issue #88](https://github.com/firesale/FireSale/issues/88) - Images not uploading bug
	* [Issue #87](https://github.com/firesale/FireSale/issues/87) - Error on save of "FireSALE Dummy" gateway bug

### Version 1.0.2
* Initial Release
{{ noparse }}

The module_installed tag allows you to check if a module is installed and allows you to dynamically update your layout to match; for example if you wish to install reviews at some point the code can be in place to display them already but hidden if it is not yet installed.

> This may be a good idea to use for theme developers or client sites to provide support for items they may not always have installed and will display them as soon as they are enabled

### Usage

The tag is very simple one but can be quite powerful for dynamic updating of sites when the modules they will be using is unknown. It works on any module and not just FireSale or its' additional ones.

	{{ firesale:module_installed slug="MODULE SLUG" }}
		...
	{{ /firesale:module_installed }}

Any code between the tags will only be executed if the module in question is installed.

> Not sure why this one required its' own page, but the rest did and I didn't want it to feel left out

{{ /noparse }}
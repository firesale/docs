This section of the control panel gives you the chance to modify, create and remove  currency settings across the whole store, and will allow you to charge users in their chosen currency. Out of the box the currency is set to British Pounds, but with a few quick changes you can change this to your local currency in moments. If you have an API key in the settings it will also automatically update them every hour with the latest information based on a range of customisation options detailed below; as well as the process to getting a key.

### Getting a Key

This is an optional step and is for those interested in having currency follow the latest exchange rates, if the key is not set the site will use whichever rate you define, either on creation or after editing it. The API we use is provided via [Open Exchange Rates](http://openexchangerates.org) and they provide an amazing, open source for exchange rates that is updated every hour and gives information on over 160 currencies. They provide a range of plans and if you would like to support them you can choose a paid option, however the free plan will more than cover your maximum requirements due to caching.

So to get a key follow these simple steps:

1. Navigate your browser [here](https://openexchangerates.org/signup) and choose the plan that suits you; a link to the free plan is located under the pricing table for those wishing to use it.
2. Fill in your details and register for an account
3. Once completed you will see a 32 character string on the right hand side, copy this and navigate back to your control panel
4. Under Settings and then FireSale you will see a field for Currency API Key, paste it in, click save and you're all done.

Once that's in place we'll take care of the rest, and every hour your currencies will be updated with the latest rates and will update everything automatically.

> Your primary currency is the item installed by default and will always have the rate of 1, all other currencies are relative to this and are modified by the options you choose.

### Creating a New Currency

To add a new currency you first need to navigate to the FireSale tab in your control panel and then to currency, once there you will see a link at the right of the header that will take you to the creation process. On this page you will see a tabbed interface similar to the one featured below, with a few entries you will be able to set up your required currency options.

<img src="/files/large/currency.01_.png" alt="Currency Creation 1" />

On the general tab you can set a few basic options, the main things to be aware of are the currency code, modifier and the exchange rate.

* The currency code must be valid and correct as it will be used whenever talking to the API to update your currency, if you're not using the API this must still be correct for many gateways to process payments.
* The modifier can be a plus, minus or multiplication and will alter the exchange rate on update to reflect your options. For example multiplying by 1.2 will add 20% to the exchange rate from your base currency.
* The exchange rate will be gotten on save if you are using the API and further updated each hour from there, modified by the above option. If you are not using the API you can set this value manually and it will remain unchanged.

<img src="/files/large/currency.02_.png" alt="Currency Creation 2" />

The formatting tab is the place to define how the currency looks as well as some general rounding options to avoid random cents or pennies, making the pricing look more consistent than automated.

Once you have set all of your required options press save or save & exit and the currency is saved and if you're using the API it will retrieve the exchange rate information so your currency is ready to use.

### Editing a Currency


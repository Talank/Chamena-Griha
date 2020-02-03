const { Given, When, Then } = require('cucumber');
const { client } = require('nightwatch-api');
const assert = require('assert')

Given('the user has browsed to food page', function () {
    return client.page.foodPage().navigate()
});

When('user tries to add an item {string} to the cart', function (item) {
    return client.page.foodPage().addItemToCart(item)
});

Then('number of the item in the cart should be {string}', function (numberOfItems) {
    return client.page.homePage().checkNumberOfItemsOnCart(numberOfItems)
});

Then('cart should include item {string}', function (item) {
    return client.page.cartPage().navigate()
        .isItemPresent(item)
});

Then('total price of the items on the cart should be {string}', function (price) {
    price = `Total: Rs ${price}`
    return client.page.cartPage().checkTotalPrice(price)
});

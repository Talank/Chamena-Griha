const { Given, When, Then } = require('cucumber');
const { client } = require('nightwatch-api');

Given('the user has browsed to cart page', function () {
    return client.page.cartPage().navigate()
});

Given('the user has added item {string} to the cart', function (item) {
    return client.page.foodPage()
        .navigate()
        .addItemToCart(item)
});

When('the user tries to remove an item {string} from the cart', function (item) {
    return client.page.cartPage().removeItemFromCart(item)
});

Then('item {string} should be removed from the cart', function (item) {
    return client.page.cartPage().isItemRemoved(item)

});

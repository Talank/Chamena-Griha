const { Given, When, Then } = require('cucumber');
const { client } = require('nightwatch-api');

When('the user selects the cart icon', function () {
    return client.waitForElementVisible('.cart').click('.cart')
});

Then('the user should be redirected to the cart page', function () {
    return client.waitForElementVisible('#cart')
});

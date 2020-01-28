const { Given, When, Then } = require('cucumber');
const { client } = require('nightwatch-api');
const assert = require('assert')

Given('the user has browsed to food page', function () {
    return client.url(client.launch_url + "/Chamena-Griha/customer/customer_food.php")
});

When('user tries to add an item {string} to the cart', function (item) {
    const addToCart = `//div/h2[.="${item}"]/following-sibling::a[.="Add to cart"]`
    return client.useXpath().waitForElementVisible(addToCart).click(addToCart).useCss()
});

Then('number of the item in the cart should be {string}', function (numberOfItems) {
    return client.element('css selector', '#number_on_cart', (result) => {
        client.elementIdText(result.value['ELEMENT'], (result) =>{
            assert.strictEqual(result.value, numberOfItems)
        })
    })
});

Then('cart should include item {string}', function (item) {
    const itemInCart = `//div/h2[.="${item}"]`
    //Browse to cart
    return client.click('.cart')
        .useXpath()
        .waitForElementVisible(itemInCart)
        .useCss();
});

Then('total price of the items on the cart should be {string}', function (price) {
    return client.element('css selector', '.total-price', (result) => {
        client.elementIdText(result.value['ELEMENT'], (result) =>{
            assert.strictEqual(result.value, `Total: Rs ${price}`)
        })
    })
});

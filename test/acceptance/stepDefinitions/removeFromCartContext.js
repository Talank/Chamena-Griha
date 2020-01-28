const { Given, When, Then } = require('cucumber');
const { client } = require('nightwatch-api');

Given('the user has browsed to cart page', function () {
    return client.url(client.launch_url + "/Chamena-Griha/customer/customer_cart.php")
});

Given('the user has added item {string} to the cart', function (item) {
    const addToCart = `//div/h2[.="${item}"]/following-sibling::a[.="Add to cart"]`
    return client.url(client.launch_url + "/Chamena-Griha/customer/customer_food.php")
        .useXpath().waitForElementVisible(addToCart).click(addToCart).useCss()
});

When('the user tries to remove an item {string} from the cart', function (item) {
    const removeFromCart = `//div/h2[.="${item}"]/following-sibling::a[.="Remove"]`
    return client.useXpath().waitForElementVisible(removeFromCart).click(removeFromCart).useCss()
});

Then('item {string} should be removed from the cart', function (item) {
    const removedItem = `//div/h2[.="${item}"]`
    return client.useXpath().waitForElementNotPresent(removedItem).useCss()
});

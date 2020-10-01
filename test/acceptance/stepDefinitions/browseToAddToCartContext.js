const { Given, When, Then } = require('cucumber');
const { client } = require('nightwatch-api');
const addToCartLink = '//div//a[.="Add to cart"]'

Given('user has logged in as a customer with username {string} and password {string}', function (username, password) {
    return client.page.indexPage().navigate()
        .userEntersUsernamePassword(username, password)
        .userTriesToLogin()
        .redirectToHomePage()
});

When('the user selects the home menu', function () {
    return client.page.homePage().selectHomeMenu()
});

Then('the user should be redirected to the home page', function () {
    return client.page.indexPage().redirectToHomePage()
});

Then('add to cart feature should be displayed in the home page', function () {
    return client.page.homePage().isAddToCartVisible()
});

When('the user selects the food menu', function () {
    return client.page.homePage().selectFoodMenu()
});

Then('the user should be redirected to the food page', function () {
    return client.page.foodPage().redirectToFoodPage()
});

Then('add to cart feature should be displayed in the food page', function () {
    return client.page.homePage().isAddToCartVisible()
});

When('the user selects the beverage menu', function () {
    return client.page.homePage().selectBeverageMenu()
});

Then('the user should be redirected to the beverage page', function () {
    return client.page.beveragePage().redirectToBeveragePage()
});

Then('add to cart feature should not be displayed in the beverage page', function () {
    return client.page.beveragePage().isAddToCartNotVisible()
});
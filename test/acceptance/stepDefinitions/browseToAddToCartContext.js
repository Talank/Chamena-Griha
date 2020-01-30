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
    return client.useXpath().waitForElementVisible(addToCartLink).useCss();
});

When('the user selects the beverage menu', function () {
    const beverageLink = '//div//a[.="Beverage"]'
    return client.useXpath().waitForElementVisible(beverageLink).click(beverageLink).useCss();
});

Then('the user should be redirected to the beverage page', function () {
    const beverageMenu = '//div/h1[.="BEVERAGES"]'
    return client.useXpath().waitForElementVisible(beverageMenu).useCss();
});

Then('add to cart feature should not be displayed in the beverage page', function () {
    return client.useXpath().waitForElementNotPresent(addToCartLink).useCss();
});
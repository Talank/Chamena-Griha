const { Given, When, Then } = require('cucumber');
const { client } = require('nightwatch-api');
const addToCartLink = '//div//a[.="Add to cart"]'

Given('user has logged in as a customer with username {string} and password {string}', function (username, password) {
    const loginForm = '.loginForm'
    const usernameField = '//div/input[@name="username"]'
    const passwordField = '//div/input[@name="password"]'
    const loginButton = '//div/form/input'

    return client.url(client.launch_url + '/Chamena-Griha/index.php')
        .waitForElementVisible(loginForm).useXpath()
        .setValue(usernameField, username)
        .setValue(passwordField, password)
        .waitForElementVisible(loginButton)
        .click(loginButton).useCss()
        .waitForElementVisible('.slider-image').waitForElementVisible('.cart')
});

When('the user selects the home menu', function () {
    const homeLink = '//div//a[.="Home"]'
    return client.useXpath().waitForElementVisible(homeLink).click(homeLink).useCss();
});

Then('the user should be redirected to the home page', function () {
    return client.waitForElementVisible('.slider-image').waitForElementVisible('.cart');
});

Then('add to cart feature should be displayed in the home page', function () {
    return client.useXpath().waitForElementVisible(addToCartLink).useCss();
});

When('the user selects the food menu', function () {
    const foodLink = '//div//a[.="Food"]'
    return client.useXpath().waitForElementVisible(foodLink).click(foodLink).useCss();
});

Then('the user should be redirected to the food page', function () {
    const foodMenu = '//div/h1[.="FOOD MENU"]'
    return client.useXpath().waitForElementVisible(foodMenu).useCss();
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
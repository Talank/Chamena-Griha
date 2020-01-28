const { Given, When, Then } = require('cucumber');
const { client } = require('nightwatch-api');
const assert = require('assert')

Given('user has created an account in chamena-griha with username {string} and password {string}', function (string, string2) {
    return true;
});

Given('user has browsed to the login page', function () {
    return client.url(client.launch_url + '/Chamena-Griha/index.php');
});

When('user enters username {string} and password {string} in the login form', function (username, password) {
    const loginForm = '.loginForm'
    const usernameField = '//div/input[@name="username"]'
    const passwordField = '//div/input[@name="password"]'

    return client.waitForElementVisible(loginForm)
        .setValue('xpath', usernameField, username)
        .setValue('xpath', passwordField, password);
});

When('user tries to login', function () {
    const loginButton = '//div/form/input'

    return client.useXpath().waitForElementVisible(loginButton)
        .click('xpath', loginButton).useCss();
});


Then('user should be redirected to the customer home page', function () {
    return client.waitForElementVisible('.slider-image').waitForElementVisible('.cart')
});


Then('an error message {string} should be shown in the screen', function (errorMessage) {
    return client.waitForElementVisible('#loginError1').element('css selector', '#loginError1', (result) =>{
        client.elementIdText(result.value['ELEMENT'], (result) => {
           assert.strictEqual(result.value, errorMessage, `Expected ${errorMessage} but got ${result.value}`)
        })
    })
});


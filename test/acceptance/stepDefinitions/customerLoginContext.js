const { Given, When, Then } = require('cucumber');
const { client } = require('nightwatch-api');
const assert = require('assert')

Given('user has created an account in chamena-griha with username {string} and password {string}', function (string, string2) {
    return true;
});

Given('user has browsed to the login page', function () {
    return client.page.indexPage().navigate()
});

When('user enters username {string} and password {string} in the login form', function (username, password) {
   return client.page.indexPage().userEntersUsernamePassword(username, password)
});

When('user tries to login', function () {
    return client.page.indexPage().userTriesToLogin();
});

Then('user should be redirected to the customer home page', function () {
    return client.page.indexPage().redirectToHomePage();
});

Then('an error message {string} should be shown in the screen', function (errorMessage) {
    return client.page.indexPage().isLoginErrorMsgVisible(errorMessage);
});


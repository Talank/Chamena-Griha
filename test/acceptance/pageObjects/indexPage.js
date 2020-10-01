const assert = require('assert')

module.exports = {
    url() {
        return this.api.launch_url + '/index.php'
    },
    commands: {
        userEntersUsernamePassword: function (username, password) {
            return this.waitForElementVisible('@loginForm')
                .setValue('@usernameField', username)
                .setValue('@passwordField', password);
        },
        userTriesToLogin: function () {
            return this.useXpath().waitForElementVisible('@loginButton')
                .click('@loginButton').useCss();
        },
        redirectToHomePage: function () {
            return this.waitForElementVisible('@sliderImage')
        },
        isLoginErrorMsgVisible: async function(errorMessage) {
                 await this.waitForElementVisible('@loginError')
               return this.api.element(this.elements.loginError.locateStrategy, this.elements.loginError.selector, (result) => {
                this.api.elementIdText(result.value['ELEMENT'], (result) => {
                    assert.strictEqual(result.value, errorMessage, `Expected ${errorMessage} but got ${result.value}`)
                })
             })
        }
    }
    ,
    elements: {
        loginForm: {
            selector: '.loginForm'
        },
        usernameField: {
            selector: '//div/input[@name="username"]',
            locateStrategy: 'xpath'
        },
        passwordField: {
            selector: '//div/input[@name="password"]',
            locateStrategy: 'xpath'

        },
        loginButton: {
            selector: '//div/form/input',
            locateStrategy: 'xpath'
        },
        sliderImage: {
            selector: '.slider-image'
        },
        cartIcon : {
            selector: '.cart'
        },
        loginError : {
            selector: '#loginError'
        }
    }
}

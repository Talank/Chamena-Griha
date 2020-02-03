// const indexPage = require('indexPage')
const assert = require('assert')

module.exports = {
    url(){
        return this.api.launch_url + '/Chamena-Griha/customer/customer_home.php'
    },
    commands:{
        selectHomeMenu: function () {
            return this.useXpath()
                .waitForElementVisible('@homeLink')
                .click('@homeLink').useCss();
        },
        isAddToCartVisible: function() {
            return this.useXpath().waitForElementVisible('@addToCartLink').useCss();
        },
        selectFoodMenu: function () {
            return this.useXpath().waitForElementVisible('@foodLink').click('@foodLink').useCss();
        },
        selectBeverageMenu: function () {
            return this.useXpath().waitForElementVisible('@beverageLink').click('@beverageLink').useCss();
        },
        selectCartIcon: function () {
            return this.waitForElementVisible('@cartIcon').click('@cartIcon')
        },
        checkNumberOfItemsOnCart: async function (numberOfItems) {
            await this.waitForElementVisible('@numberOnCart')
            return this.api.element(this.elements.numberOnCart.locateStrategy, this.elements.numberOnCart.selector, (result) => {
                this.api.elementIdText(result.value['ELEMENT'], (result) =>{
                    assert.strictEqual(result.value, numberOfItems)
                })
            })
        }

    },
    elements: {
        homeLink : {
            selector : '//div//a[.="Home"]',
            locateStrategy : 'xpath'
        },
        addToCartLink: {
            selector: '//div//a[.="Add to cart"]',
            locateStrategy: 'xpath'
        },
        foodLink: {
            selector: '//div//a[.="Food"]',
            locateStrategy: 'xpath'
        },
        beverageLink: {
            selector: '//div//a[.="Beverage"]',
            locateStrategy: 'xpath'
        },
        cartIcon: {
            selector: '.cart'
        },
        numberOnCart: {
            selector: '#number_on_cart'
        }
    }
}
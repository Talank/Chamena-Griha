const util = require('util');
const assert = require('assert');

module.exports = {
    url(){
        return this.api.launch_url + '/customer/customer_cart.php'
    },
    commands:{
        redirectToCartPage: function () {
            return this.waitForElementVisible('@cartItems');
        },
        isItemPresent: function (item) {
            const itemToCheck = util.format(this.elements.itemInCart.selector, item)
            return this.useXpath()
                .waitForElementVisible(itemToCheck)
                .useCss();
        },
        checkTotalPrice: function (price) {
            return this.waitForElementVisible('@totalPrice')
                .getText('@totalPrice', (result) => {
                    assert.strictEqual(result.value, price);
                    console.log(result.value)
            })
        },
        orderItem: function () {
            return this.waitForElementVisible('@orderButton')
                .click('@orderButton')
        },
        isServeOptionVisible: function () {
            return this.waitForElementVisible('@serveButton')
        },
        removeItemFromCart: function (item) {
            const removeItem = util.format(this.elements.itemToRemove.selector, item)
            return this.useXpath().waitForElementVisible(removeItem).click(removeItem).useCss()
        },
        isItemRemoved: function (item) {
            const itemToCheck = util.format(this.elements.removedItem.selector, item)
            return this.useXpath().waitForElementNotPresent(itemToCheck).useCss()
        }
    },
    elements: {
        cartItems: {
            selector: '#cart'
        },
        itemInCart: {
            selector: '//div/h2[.="%s"]',
            locateStrategy: 'xpath'
        },
        totalPrice: {
            selector: '.total-price'
        },
        orderButton: {
            selector: '#order_btn'
        },
        serveButton: {
            selector: '#serve_btn'
        },
        itemToRemove: {
            selector: '//div/h2[.="%s"]/following-sibling::a[.="Remove"]',
            locateStrategy: 'xpath'
        },
        removedItem: {
            selector: '//div/h2[.="%s"]',
            locateStrategy: 'xpath'
        }
    }
}

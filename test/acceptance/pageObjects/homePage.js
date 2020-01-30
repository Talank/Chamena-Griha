// const indexPage = require('indexPage')

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
        }
    }
}
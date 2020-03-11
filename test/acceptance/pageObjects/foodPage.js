const util = require('util')

module.exports = {
    url(){
        return this.api.launch_url + '/customer/customer_food.php'
    },
    commands:{
        redirectToFoodPage: function () {
            return this.useXpath().waitForElementVisible('@foodMenu').useCss();
        },
        addItemToCart : function (item) {
            const itemToAddXpath = util.format(this.elements.itemToAdd.selector, item)
            return this.useXpath().waitForElementVisible(itemToAddXpath).click(itemToAddXpath).useCss()
        }
    },
    elements: {
        foodMenu: {
            selector: '//div/h1[.="FOOD MENU"]',
            locateStrategy: 'xpath'
        },
        itemToAdd: {
            selector: '//div/h2[.="%s"]/following-sibling::a[.="Add to cart"]',
            locateStrategy: 'xpath'
        }
    }
}

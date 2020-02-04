module.exports = {
    url(){
        return this.api.launch_url + '/Chamena-Griha/customer/customer_beverage.php'
    },
    commands:{
        redirectToBeveragePage: function () {
            return this.useXpath().waitForElementVisible('@beverageMenu').useCss();
        },
        isAddToCartNotVisible : function () {
            return this.useXpath().waitForElementNotPresent(this.page.homePage().elements.addToCartLink.locateStrategy, this.page.homePage().elements.addToCartLink.selector).useCss();
        }
    },
    elements: {
        beverageMenu: {
            selector: '//div/h1[.="BEVERAGES"]',
            locateStrategy: 'xpath'
        }
    }
}
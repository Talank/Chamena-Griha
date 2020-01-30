module.exports = {
    url(){
        return this.api.launch_url + '/Chamena-Griha/customer/customer_food.php'
    },
    commands:{
        redirectToFoodPage: function () {
            return this.useXpath().waitForElementVisible('@foodMenu').useCss();
        }
    },
    elements: {
        foodMenu: {
            selector: '//div/h1[.="FOOD MENU"]',
            locateStrategy: 'xpath'
        }
    }
}
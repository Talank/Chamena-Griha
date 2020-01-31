module.exports = {
    url(){
        return this.api.launch_url + '/Chamena-Griha/customer/customer_cart.php'
    },
    commands:{
        redirectToCartPage: function () {
            return this.waitForElementVisible('@cartItems');
        }

    },
    elements: {
        cartItems: {
            selector: '#cart'
        }
    }
}
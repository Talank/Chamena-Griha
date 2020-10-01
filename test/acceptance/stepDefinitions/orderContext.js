const {Given, When, Then} = require('cucumber');
const {client} = require('nightwatch-api');

Given('the user has added following items to the cart', async function (dataTable) {
    var datas = dataTable.hashes()
    await Promise.all(datas.map(item => {
        return client.page.foodPage()
            .addItemToCart(item['items'])
    }))
});

When('the user tries to order the item on cart', function () {
    return client.page.cartPage().orderItem()
});

Then('serve option should be visible', function () {
    return client.page.cartPage().isServeOptionVisible()
});


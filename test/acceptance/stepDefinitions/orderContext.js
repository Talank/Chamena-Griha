const {Given, When, Then} = require('cucumber');
const {client} = require('nightwatch-api');

Given('the user has added following items to the cart', async function (dataTable) {
    var datas = dataTable.hashes()
    await Promise.all(datas.map(item => {
        const itemToClick = (`//div/h2[.="${item['items']}"]/following-sibling::a[.="Add to cart"]`)
        return client.useXpath().waitForElementVisible(itemToClick).click(itemToClick).useCss()
    }))
});

When('the user tries to order the item on cart', function () {
    return client.waitForElementVisible('#order_btn').click('#order_btn')
});

Then('serve option should be visible', function () {
    return client.waitForElementVisible('#serve_btn').pause(5000)
});


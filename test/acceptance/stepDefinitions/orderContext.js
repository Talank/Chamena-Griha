const { Given, When, Then } = require('cucumber');
const { client } = require('nightwatch-api');

Given('the user has added following items to the cart', function (dataTable) {
    var datas = dataTable.hashes()
    console.log(datas[0]['items'])
    const addToCart = `//div/h2[.="${datas['items']}"]/following-sibling::a[.="Add to cart"]`
    //foreach item
    //async await for returning multiple returns

    
    // console.log(addToCart);
    //return client.url(client.launch_url + "/Chamena-Griha/customer/customer_food.php")
      //  .useXpath().waitForElementVisible(addToCart).click(addToCart).useCss()
});

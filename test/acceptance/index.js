const { setDefaultTimeout, After, Before } = require('cucumber')
const { createSession, closeSession, startWebDriver, stopWebDriver, client } = require('nightwatch-api')
const fetch = require('node-fetch');

setDefaultTimeout(60000)


Before(async () => {
    await startWebDriver();
    await createSession();
})

After(async () => {
    await closeSession();
    await stopWebDriver();
    // await function clearCart() {
    //     location.href = '../../config/clean/cart.php';
    // }
    // var xhr = new XMLHttpRequest();
    // xhr.open('POST', "../../config/clean/cart.php", true);
    header = {}
    await fetch(client.launch_url + '/Chamena-Griha/config/clean/cart.php')
        .then(res => {
            console.log(res)
        })
})

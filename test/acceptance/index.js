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
    await fetch(client.launch_url + '/config/clean/cart.php')
})

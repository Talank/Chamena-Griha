module.exports = {
    page_objects_path: './test/acceptance/pageObjects',
    src_folders: ['test'],
    test_settings: {
        default: {
            selenium_host: process.env.SELENIUM_HOST || '127.0.0.1',
            launch_url: process.env.LAUNCH_URL || 'http://172.17.0.1:80',
            globals: {},
            desiredCapabilities: {
                browserName: 'chrome',
                javascriptEnabled: true,
                chromeOptions: {
                    args: ['disable-gpu'],
                    w3c: false
                }
            }
        }
    }
}

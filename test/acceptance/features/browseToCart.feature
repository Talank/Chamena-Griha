Feature: browse to cart
    As a customer
    I want to browse to cart page
    So that I can order items from my cart

    Scenario: browse to cart page
        Given user has logged in as a customer
        When user selects the cart icon
        Then user should be redirected to the cart page
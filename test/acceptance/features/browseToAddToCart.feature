Feature: browse to add to cart
    As a customer
    I want to browse to a page with add to cart Feature
    So that I can add items to cart

    Background:
        Given user has logged in as a customer

    Scenario: browse to home page
        When user selects the home menu
        Then user should be redirected to the home page
        And add to cart feature should be displayed in the home page

    Scenario: browse to food page
        When user selects the food menu
        Then user should be redirected to the food page
        And add to cart feature should be displayed in the food page

    Scenario: browse to beverage page
        When user selects the beverage menu
        Then user should be redirected to the beverage page
        And add to cart feature should be displayed in the beverage page
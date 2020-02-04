Feature: browse to add to cart
    As a customer
    I want to browse to a page with add to cart Feature
    So that I can add items to cart

    Background:
        Given user has logged in as a customer with username "zombie123" and password "password"

    Scenario: browse to home page
        When the user selects the home menu
        Then the user should be redirected to the home page
        And add to cart feature should be displayed in the home page

    Scenario: browse to food page
        When the user selects the food menu
        Then the user should be redirected to the food page
        And add to cart feature should be displayed in the food page

    Scenario: browse to beverage page
        When the user selects the beverage menu
        Then the user should be redirected to the beverage page
        And add to cart feature should not be displayed in the beverage page
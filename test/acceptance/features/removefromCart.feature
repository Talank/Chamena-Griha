Feature: remove from cart
    As a customer
    I want to remove items from my cart
    So that unwanted items do not remain in my cart

    Scenario Outline: remove item from the cart
        Given user has logged in as a customer with username "zombie123" and password "password"
        And the user has added item "<item>" to the cart
        And the user has browsed to cart page
        When the user tries to remove an item "<item>" from the cart
        Then item "<item>" should be removed from the cart
        And number of the item in the cart should be "0"
        And total price of the items on the cart should be "0"
        Examples:
            | item    |
            | Pakauda |
            | Momo    |
Feature: remove from cart
    As a customer
    I want to remove items from my cart
    So that unwanted items do not remain in my cart

    Scenario: remove item from the cart
        Given user has logged in as a customer
        And user has browsed to cart page
        When user tries to remvoe an item "<item>" from the cart
        Then the item should be removed from the cart
        And the total number of types of items in cart is updated
        And total price of the items in the cart should be updated
        Examples:
            | item    |
            | Pakauda |
            | Momo    |
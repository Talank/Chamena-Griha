Feature: order
    As a customer
    I want to order items
    So that my order can be served

    Scenario: normal order
        Given user has logged in as a customer with username "zombie123" and password "password"
        And the user has browsed to food page
        And the user has added following items to the cart
            | items   |
            | Pakauda |
            | Momo    |
        And the user has browsed to cart page
        When the user tries to order the item on cart
        Then serve option should be visible
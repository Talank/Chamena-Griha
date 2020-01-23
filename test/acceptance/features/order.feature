Feature: order
    As a customer
    I want to order items
    So that my order can be served

    Scenario: normal order
        Given user has added items on cart
        When user tries to order the items on cart
        Then order should be success
        And serve option should be visible
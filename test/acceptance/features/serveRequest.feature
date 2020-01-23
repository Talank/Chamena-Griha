Feature: serve request
    As a customer
    I want my order to be served
    So that I can eat my food

    Scenario: request to serve order
        Given user has ordered "item"
        When user makes serve request
        Then a message "Your serve request has been sent" should be displayed
        And all the item should be removed from cart
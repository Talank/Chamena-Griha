Feature: customer login
    As a customer
    I want to login to chamena-griha
    So that I can use the chamena-griha services

    Background:
        Given user has created an account in chamena-griha with username "zombie123" and password "password"
        And user has browsed to the login page

    Scenario: customer login with correct username and password
        When user enters username "zombie123" and password "password" in the login form
        And user tries to login
        Then user should be redirected to the customer home page

    Scenario Outline: login with wrong credentials
        When user enters username "<username>" and password "<password>" in the login form
        And user tries to login
        Then an error message "<message>" should be shown in the screen
        Examples:
            | username  | password    | message                        |
            | zombie    | password    | Incorrect username or password |
            | zombie123 | password123 | Incorrect username or password |
            | 123       | pass        | Incorrect username or password |

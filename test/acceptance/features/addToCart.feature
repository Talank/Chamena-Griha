Feature: add to cart
   As a customer
   I want to add food and beverage to my cart
   So that I can order that item later

   Scenario Outline: add item to the cart
      Given user has logged in as a customer with username "zombie123" and password "password"
      And the user has browsed to food page
      When user tries to add an item "<item>" to the cart
      Then number of the item in the cart should be "1"
      And cart should include item "<item>"
      And total price of the items on the cart should be "<price>"
      Examples:
         | item    | price |
         | Pakauda | 50    |
         | Momo    | 100   |

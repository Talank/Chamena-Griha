Feature: add to cart
   As a customer
   I want to add food and beverage to my cart
   So that I can order that item later

   Scenario Outline: add item to the cart
      Given user has logged in as a customer
      And user has browsed to a page with add to cart feature
      When user tries to add an item "<item>" to the cart
      Then number of the item in the cart should be increased
      And the total number of types of items in cart should be updated
      And total price of the items on the cart should be updated
      Examples:
         | item    |
         | Pakauda |
         | Momo    |
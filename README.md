# Chamena Griha
--------------------------------
A web project built using Web Technologies such as Html, Css, Javascript and Php.
This project aims to simplify the food ordering and payment process in school and college canteens by removing the overheads such as long queues of people waiting for their turn to order food and make payment.

## Run the project in localhost
1) Create a db named `casdb` using mySQL
2) import the file `database/casdb.sql` in your newly created database.
3) start the php server `pap -S 172.17.0.1:8000`

## Default users for testing purpose

- **Students**\
  username- zombie123\
  password- password

- **College_admin**\
  username- college123\
  password- password

- **Canteen**\
  username- canteen123\
  password- password

## Run test
1) Run the project locally
2) Run the selenium server. You can run selenium via docker as follows:
```
docker run -p 4445:4444 -p 5900:5900 -v /dev/shm:/dev/shm selenium/standalone-
chrome-debug
```
3) Run the script
```
npm run test-e2e test/acceptance/features
```
OR
```
npm run test-e2e test/acceptance/features/[YOUR_FEATURE_FILE].feature
```

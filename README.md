# Student-Registration-System
> Student Registration system using PHP and XAMPP

## Tech Stack
This project built using following technologies :
- Php
- HTML
- CSS
- SCSS
- Bootstrap
- Javascript
- MySQL
- Localhost (XAMPP or WAMP)


## Working

The user enters all these fields and presses on sign-up button, if all the information
is entered appropriately a alert window pops-up stating that **You’re Successfully
Registered**, PHP is used to act as an interface between the Database and the Frontend. Write a MySQL query ` INSERT INTO students (fname, lname, rollno, email,
password, gender, state, city) VALUES (’$fname’, ’$lname’, ’$roll no’, ’$email’,
’$password’, ’$gender’, ’$state’, ’$city’) ` through which the values are entered into
the local MySQL database. The database can be accessed from ` XAMPP’s PhpMyAdmin.`

The front-end which consists of The sign-up page is built up using CSS, SCSS,
HTML and Bootstrap, The sign-up page consists of 8 fields:

- First Name
- Last Name
- Roll Number
- Email ID
- Password
- Gender
- State
- City

![Front end]()

![]()

![]()

![]()

![]()

## How to make it work

- Download Xampp
- Place the above ` home.php ` in **htdocs** folder of xampp
- Open Xampp and run Apache MySQL
- Open the Admin on MySQL, it’ll take you to the localhost of PhpMyAdmin
- Once in PhpMyAdmin create a new database and name it students registration
- In that database create a new table students consisting of **8 colummns**
- Now run the home.php file, through the browser, by typing this url ` localhost://home.php `
- Enjoy!! ✌

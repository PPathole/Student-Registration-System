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
Then comes the `Admin login`, which can be accessed by putting down the username: `admin` and password: `admin`, then you'll be redirected to `adminPage.php` which retrieves the data from the students table and displays it in a tabular format.
The admin can delete or edit the info about the particular user, the respective code is in `delete.php` and `edit.php`
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

![Front end](https://github.com/PPathole/Student-Registration-System/blob/master/index.PNG)

![Admin login](https://github.com/PPathole/Student-Registration-System/blob/master/adminlogin.PNG)

![Admin Page](https://github.com/PPathole/Student-Registration-System/blob/master/adminpage1.PNG)

![Phpmyadmin](https://github.com/PPathole/Student-Registration-System/blob/master/phpmyadmin.PNG)

![Phpmyadmin db](https://github.com/PPathole/Student-Registration-System/blob/master/phpmyadmindb.PNG)

![Student Login](https://github.com/PPathole/Student-Registration-System/blob/master/studentlogin.PNG)

![Student Feed](https://github.com/PPathole/Student-Registration-System/blob/master/studentfeed1.PNG)

![Student Feed 2](https://github.com/PPathole/Student-Registration-System/blob/master/studentfeed2.PNG)

![Problems](https://github.com/PPathole/Student-Registration-System/blob/master/problems.PNG)

## How to make it work

- Download Xampp
- Place the above ` home.php ` in **htdocs** folder of xampp
- Open Xampp and run Apache MySQL
- Open the Admin on MySQL, it’ll take you to the localhost of PhpMyAdmin
- Once in PhpMyAdmin create a new database and name it students registration
- In that database create a new table students consisting of **8 colummns**
- Now run the home.php file, through the browser, by typing this url ` localhost://StudentRegistration/home.php `
- Enjoy!! ✌


## Email Functionality
Sending emails to students to respond whether their query has been solved or not.
Sending emails through localhost & xampp consists of dealing with 2 files present in `C:\\xampp\php\php.ini` and `C:\\xampp\sendmail\sendmail.ini`

#### Inside sendmail.ini file:
- smtp_server=smtp.gmail.com
- smtp_port=587
- smtp_ssl=tls
- error_logfile=error.log
- debug_logfile=debug.log
- auth_username=`your email to be used for sending purposes`
- auth_password=`password of that respective email`
- force_sender=`same email used`

#### Inside php.ini file:
- 

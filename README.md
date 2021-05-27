Installation Process for XAMPP on Windows
-----------------------------------------
इस Web Project software को install करना बहुत ही आसान है और आप इसे आसानी से mobile, laptop या computer में use भी कर सकते हो।

#Step 1

आप XAMPP software को आसानी से http://www.apachefriends.org/ से download कर सकते हो।
यह एक Open Source है और बिलकुल free है।


#Step 2

Software Download हो जाने के बाद आप .exe file पर double click करके install कर सकते हो।


#Step 3

जैसे ही file execute हो जाएगी तो और setup window सामने आ जाएगी। आप components को customize कर सकते हैं।


#Step 4

अब आप folder को select कर सकते हैं जहाँ आप XAMPP को को install करना चाहते है।
By default यह computer की C drive में install होता है। लेकिन आप चाहें तो installation की location भी change कर सकते हो।
अब आपको फिर से next पर click करना है।


#Step 5

इसके बाद एक और screen show होगी जिसमें पूछा जाएगा की क्या आप bitnami के बारे में जानना चाहते हैं।
यदि आप bitnami के बारे में जानना चाहते हैं तो software में दिए गए link पर click करके जान सकते हैं।
नहीं तो checkbox को un-check करके next click कर सकते हो।


#Step 6

अब आपका XAMPP का setup install होने के लिए ready है। आप जैसे ही install पर click करोगे installation शरू हो जाएगी।


#Step 7

जैसे ही installation शरू होगी तो यह install होने में थोडा समय भी ले सकता है।


#Step 8

जैसे ही installation process complete होगा उसके बाद Finish button पर click करना होगा।


#Step 9

Finish पर click करने के बाद आपको अपनी language को choose करना होगा।
यहां पर by default English है इसलिए आप बिना change किये Save पर click कर सकते हो।


#Step 10
जब आप यह सब कर लोगे तो आपके desktop पर XAMPP का icon show होने लगेगा।
Double Click करके XAMPP को शरू किया जा सकता है।




Step 11

अब आपके सामने XAMPP का control panel show हो जाएगा।
इस control panel के जरिये आप services को start और stop कर सकते हो।
आपको PHP को अपने desktop में run करवाने के लिए Apache और MySQL की services को ही शरू करना है।

आपके desktop पर XAMPP software install हो चुका है। अब आप PHP और MySQL को बड़ी आसानी से run कर सकते हो, और Web Applications को run कर सकते हो।



Setup Database
----------------------------------------------------

#Step 1

Log into phpMyAdmin. url is http://localhost/phpmyadmin


#Step 2

Select the destination database on the left pane or create new database 

--
-- Database: `library`
--


#Step 3

Click on the Import tab in the top center pane. 

#Step 4

Under the File to import section, click Browse and locate the file with the .sql extension you wish to import.
(Project_Folder -> documentation -> .database.sql )

#Step 5

Check or uncheck the boxes for 'Partial import' and 'Other options'.


#Step 6

From the Format dropdown menu choose 'SQL'.


#Step 7

Click the Go button at the bottom to import the database.



Setup Project
---------------

#Step 1

downloaded project folder move to server root directory.
(c:/xampp/htdocs/)


#Step 2

Open any Browser type on Url localhost/project_folder_name
(localhost/demo_project/) 









# Online-Library-Management-System-PHP
This is a simple Online-Library-Management-System for School and colleges..
Online library Management System divided in two modules–

Student
Admin
Admin Features

Admin Dashboard
Admin can add/update/ delete category
Admin can add/update/ delete author
Admin can add/update/ delete books
Admin can issue a new book to student and also update the details when student return book
Admin can search student by using their student ID
Admin can also view student details
Admin can change own password
Students-

Student can register yourself and after registration they will get studentid
After login student can view own dashboard.
 Student can update own profile.
Student can view issued book and book return date-time.
Student can also change own password.
Student can also recover own password.
How to run this Project
1. Download and Unzip file on your local system copy library.
2. Put library folder inside root directory
Database Configuration
Open phpmyadmin
Create Database library
Import database library.sql (available inside zip package)
For User
Open Your browser put inside browser “http://localhost/library”
Login Details for user :
Username : test@gmail.com
Password : Test@123
For Admin Panel
Open Your browser put inside browser “http://localhost/library/admin”
Login Details for admin :
Username : admin
Password : Kumar@123

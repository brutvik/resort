* include connect.php in all php files

* CHANGES DONE TO DB
(i)Added a new column password in customer for login purpose

* CHANGES TO BE MADE  
(i)None of the .html files have script to check form validation
(ii)signup of empty form gets empty row in db, but once empty row is created no more of such are made
(iii)When login is incorrect it is taken to the same .php file as correct login
(iv)After login out, hitting back gets us in login state
		

File			-		Purpose

ProjectDB.sql		-		Creating tables and inserting to db


connect.php		-		Connects to TravelFantasy db    




signup.html		- 		UI and backend for signup
signup.php				Backend INSERTS record into db



login.html		- 		UI for user login
login.php		 		Takes ssn and password to login to get select*


forgot.html		-		UI for changing password in db
forgot.php				backend executes UPDATE query


Filter.php		-		Filter resorts based on star rating 
FilterAction.php


Retrieve.php		-		Retrieves info about any customer 
RetrieveAction.php	   		by using username




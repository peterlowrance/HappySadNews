<!DOCTYPE html>
<html lang="en">
<head>
  <title>HappyNewsBadNews</title>
  <meta charset="utf-8">
</head>
<body>
	<?php

	  // DB connection parameters
	  $servername = "127.0.0.1";
	  $username = "root";
	  $password = "";
	  $dbname = "happysadnews";
	  
	  
		if( $_SERVER['REQUEST_METHOD'] === 'GET' ){
			if( !isset($_GET["username"]) || !isset($_GET["password"]) ){
				echo("You need both a username and a password");
			}
			else{
				//get vars from the form input
				$user = $_GET["username"];
				$pass = $_GET["password"];
			  
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
			  
				// Check connection
				if ($conn->connect_errno) {
					echo("Database failure. Did you import users.sql into xampp?");
				}
				else {
					echo("connection successful");
					
					//
					//rest of work goes here
					//
				
				}
			}
		}
		else{
		  echo("No GET request received.");
		}
	  
	   ?>
   </body>
</html>
   
   
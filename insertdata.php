<?php

// include database 

$servername = "localhost";
$username = "developertest";
$password = "HL@2021test";
$dbname = "hla";

//

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = '58';
$name = 'ainahasim';
$email = 'nurainahasim@gmail.com';
$token = md5("testuser");

$district = 'bangi';
$state = 'selangor';
$country = 'malaysia';

//table users - id (int), name (varchar 255), email (varchar 255), token (MD5 varchar 255), created (datetime)
$user = "INSERT INTO users 
          VALUE ('$id', '$name', '$email', '$token', now())";

//table locations - id, user_id (int), district (varchar 255), state (varchar 255),country (varchar 255)
$location = "INSERT INTO locations 
              VALUE ('$id', '$id', '$district', '$state', '$country')";



if ($conn->query($user) === TRUE && $conn->query($location) === TRUE ) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
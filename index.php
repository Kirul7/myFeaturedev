<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// include database and object files

$servername = "localhost";
$username = "developertest";
$password = "HL@2021test";
$dbname = "hla";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$headers = 
$token = NULL;
foreach ($headers as $header => $value) {

    if($header == 'Authorization'){
        $token = $value;
    }
}

//table users - id (int), name (varchar 255), email (varchar 255), token (MD5 varchar 255), created (datetime)
$sql =  "INSERT INTO Users (id(int)', name(varchar 255), email(varchar 255), token(MD5 varchar 255), created DATETIME(),branch_name(varchar 255)) 
VALUES ('1', 'Syukri', 'Syukri@mail.com','MD5 98' ,'DATETIME()','SIP')";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

$location_id = "1";
//table locations - id, user_id (int), district (varchar 255), state (varchar 255),country (varchar 255)
$sql = "INSERT INTO Locations (id, user_id (int), district (varchar 255), state (varchar 255),country (varchar 255), branch_name (varchar 255))
VALUES ('1', 'SYUKRI9809','Bentong','Pahang','Malaysia','SIP')";
$data = $conn->query($sql);

  while($row = $data->fetch_assoc()) {
     = $row["district"];
     = $row["state"];
     = $row["country"];
  }


if($data->num_rows > 0){ 
    // set response code - 200 OK
  
    // show products data
         ($location);
      }
  
else {
    // set response code - 404 Not found
  
    // tell the user no location found
 
        array("message" => "No location found.")
  
}

} else {
    // set response code - 401 401 Unauthorized

  
    // no user found
 
        array("message" => "401 Unauthorized.")
   

}

$conn->close();
?>

<?php

//access all variables and functions in connection.php as if the connection.php is written here
include "connection.php";

//TABLES: users, appointments, cars

//check if tables required exist, return array of tables missing
function checkTablesExist() {
  //get global variables
  global $conn;
  //set the tables status present to determine which is not created yet | 1 = present, 2 = not present
  $tablesStatus = ["users" => 0, "appointments" => 0, "cars" => 0, "reviews" => 0];
  //initiate array of tables missing
  $tablesToCreate = [];

  //create query to obtain existing tables in the database
  $result = $conn -> query("SHOW TABLES WHERE Tables_in_database_vrum LIKE 'users' OR Tables_in_database_vrum LIKE 'appointments' OR Tables_in_database_vrum LIKE 'cars' OR Tables_in_database_vrum LIKE 'reviews'");
  
  //if the result of query is not empty, alter $tables to determine which table is present among the results
  if ($result -> num_rows > 0) {
    // $result->fetch_assoc() gets the next item in $result and assign it to $row as an associative array every iteration
    while ($row = $result->fetch_assoc()) {
      if ($row["Tables_in_database_vrum"] === "users"){
        $tablesStatus["users"] = 1;
      } else if ($row["Tables_in_database_vrum"] === "appointments") {
        $tablesStatus["appointments"] = 1;
      } else if ($row["Tables_in_database_vrum"] === "cars") {
        $tablesStatus["cars"] = 1;
      } else if ($row["Tables_in_database_vrum"] === "reviews") {
        $tablesStatus["reviews"] = 1;
      }
    }
  }
  
  //loop to the tablesStatus to know what table is missing and add it to tablesToCreate array
  foreach ($tablesStatus as $key => $value) {
    if ($value === 0) {
      array_push($tablesToCreate, $key);
    }
  }
  
  return $tablesToCreate;

 }

 function createTables($table, $columns) {
  global $conn;

  $conn -> query("CREATE TABLE {$table} {$columns}");

  if ($conn -> connect_error) {
    echo $conn -> connect_error;
  }

 }

 /**
  * MAIN LOGIC
  */

// if missing tables array is not empty, loop in the array and create a table for each element in the $missingTables array.
$missingTables = checkTablesExist();
if (count($missingTables) > 0 ) {
  echo "<br/>...";
  foreach ($missingTables as $missingTable) {
    if ($missingTable === "users") {
      createTables($missingTable, "(user_id INT PRIMARY KEY auto_increment, name VARCHAR(50) NOT NULL, role VARCHAR(10) NOT NULL, password varchar(100) NOT NULL)");
    } else if ($missingTable === "appointments") {
      createTables($missingTable, "(appointment_id INT PRIMARY KEY auto_increment, appointment_title VARCHAR(50) NOT NULL, appointment_date DATE NOT NULL, appointor_id INT NOT NULL)");
    } else if ($missingTable === "cars") {
      createTables($missingTable, "(car_id INT PRIMARY KEY auto_increment, car_name varchar(50) NOT NULL, renter_id INT)");
    } else if ($missingTable === "reviews") {
      createTables($missingTable, "(review_id INT PRIMARY KEY auto_increment, review_content varchar(1000) NOT NULL, reviewer_id INT NOT NULL)");
    } 
  }
}
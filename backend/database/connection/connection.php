<?php 

/**
 *  
 */

//initiate known database parameters
$host = "localhost:3306";
$user = "root";
$password = "admin";
$database = "database_vrum";

//connect to mysql server and check if database exist | returns true or false
function checkDatabaseExist() {
  //access global variables outside the function
  global $host, $user, $password, $database;

  //create a connection object to the mysql server
  $conn = new mysqli($host, $user, $password);

  //check if there is error in object connection | returns true if connection is success
  if ($conn -> connect_error) {
    echo $conn -> connect_error;
  }

  //query to check database and store result to $result variable
  $result = $conn -> query("SHOW DATABASES LIKE '$database'");

  //close the mysql connection
  $conn -> close();

  //check if there is any result at all
  if ($result -> num_rows > 0) {
    return true;
  } else {
    return false;
  }
}

//create database for vrum
function createDatabase() {
  //access global variables outside the function
  global $host, $user, $password, $database;

  //create a connection object to the mysql server
  $conn = new mysqli($host, $user, $password);

  //check if there is error in object connection | returns true if connection is success
  if ($conn -> connect_error) {
    echo $conn -> connect_error;
  }

  //create query to create a database
  $conn -> query("CREATE DATABASE {$database}");

  //close the mysql server connection
  $conn -> close();
}

//connect to database
function connectDatabase() {
  //access global variables outside the function
  global $host, $user, $password, $database;

  //connect to mysql database
  $conn = new mysqli($host, $user, $password, $database);

  //check for error in connection
  if ($conn -> connect_error) {
    echo $conn -> connect_error;
  } 

  //return mysql object
  return $conn;
}

/**
 * MAIN LOGIC
 */
//if database existed do nothing, if not existed, create one and connect to it.
$databaseExist = checkDatabaseExist();
if ($databaseExist) {
  $conn = connectDatabase();
} else {
  createDatabase();
  $conn = connectDatabase();
}
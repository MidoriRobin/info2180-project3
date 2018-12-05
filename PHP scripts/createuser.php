<?php
session_start();
$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'JobsSchema';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pass'];                
$email=$_POST['email'];
$tel=$_POST['tel'];




try {
    $conn = new PDO("mysql: host=$host; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Users (Firstname, Lastname,Password,Telephone, Email)
    VALUES ('$fname', '$lname', '$pass','$tel','$emai')";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


?>
 
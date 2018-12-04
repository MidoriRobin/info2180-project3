<?php

session_start();

// $_SESSION['username'];
// $_SESSION['password'];

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'JobsSchema';

$tempuname = $_POST['user'];
$temppass = $_POST['pass'];

//echo $_POST;
echo $tempuname;
echo $temppass;
echo "<br> <br>";

if(!empty($_POST)){
  if(isset($_POST['user']) && isset($_POST['pass'])){
    $conn = new PDO("mysql: host=$host; dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM users WHERE Email = :uname");
    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $user . "<br/>";
    $stmt->bindParam(':uname', $user, PDO::PARAM_STR);
    $stmt->execute();
    // echo($testvar) . "</br>";
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $userinfo = $stmt->fetch();

    if(empty($userinfo)){

      echo"Invalid username entered!";

    } else{

      echo"Welcome: " . $userinfo['FirstName'] . $userinfo['LastName'] . ", Hello";

    }
    // echo 'Rows: ' . ($stmt->fetchAll() == '') . "</br>";
    // echo 'result of the query: ' . $result;
    //echo '</br> successfull';
  }
}


// session_unset();
// session_destroy();



?>

<?php

session_start();

// $_SESSION['username'];
// $_SESSION['password'];

$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'JobsSchema';

$tempuname = $_POST['uname'];
$temppass = $_POST['pass'];

//echo $_POST;
//echo $tempuname;
// echo $temppass;
// echo "<br> <br>";

if(!empty($_POST)){
  
  if(isset($_POST['uname']) && isset($_POST['pass'])){
    // echo 'entering connection statements...';
    
    $conn = new PDO("mysql: host=$host; dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT * FROM Users WHERE Email = :uname AND Password = :pword");
    $user = filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // echo $user . "<br/>";
    
    $stmt->bindParam(':uname', $user, PDO::PARAM_STR);
    $stmt->bindParam(':pword', $pass, PDO::PARAM_STR);
    $stmt->execute();
    
    // echo($testvar) . "</br>";
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $userinfo = $stmt->fetch();

    if(empty($userinfo)){

      echo"<h2>Invalid username or password entered!<h2>";

    } else{

      echo"Welcome: " . $userinfo['FirstName'] . $userinfo['LastName'] . ", Hello";
      $_SESSION['fName'] = $userinfo['FirstName'];
      $_SESSION['lName'] = $userinfo['LastName'];
      $_SESSION['value'] = 'true';
      
      //session_destroy();
      echo "<h2>login success!</h2>";
      header("location:../PHP scripts/dashboard.php");
      
    }
    // echo 'Rows: ' . ($stmt->fetchAll() == '') . "</br>";
    // echo 'result of the query: ' . $result;
    // echo '</br> successfull';
  } else {
    echo 'you forgot a value';
  }
}


// session_unset();
//session_destroy();

//header(location:)

?>

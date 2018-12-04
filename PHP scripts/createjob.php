<?php

#Values from the job creation form should fill here k
$jtitle = $_POST['jtitle'];
$jdesc = $_POST['jdes'];
$category = $_POST['category'];
$company = $_POST['comp'];
$cName = $_POST['comp'];
$location = $_POST['jloc'];
$date = date('Y-m-d H:i:s');

$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'JobsSchema';

if($_POST == ''){
  echo 'No data recieved';
}

try{
    $conn = new PDO("mysql: host=$host; dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn->exec("INSERT INTO Jobs(job_title, job_description, category, company_name, company_location, date_posted)
        VALUES ('{$jtitle}','{$jdesc}','{$category}','{$company}','{$location}','{$date}')");
} catch(PDOexception $e){
    echo "An error has occured <br/>" . $e->getMessage();
}

header("location:../HTML/login.html"); 
?>
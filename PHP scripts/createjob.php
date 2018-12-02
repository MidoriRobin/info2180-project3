<?php

#Values from the job creation form should fill here k
$jtitle =
$jdesc = 
$category =
$cName =
$location =
$date = 

$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'JobsSchema';

try{
    $conn = new PDO("mysql: host=$host; dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn->exec("INSERT INTO Jobs(job_title, job_description, category, company_name, company_location, date_posted)
        VALUES ('{$jtitle}','{$jdesc}','{$category}','{$company}','{$location}','{$date}')");
} catch(PDOexception $e){
    echo "An error has occured <br/>" . $e->getMessage();
}
?>
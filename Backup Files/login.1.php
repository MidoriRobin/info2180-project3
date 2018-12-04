<?php
session_start();

function userLogin($emailAddress,$password)
{
    if(!(CheckLoginInDB($emailAddress,$password)))
    {
        echo "Login Failed";
        return false;
    }
}

function CheckLoginInDB($emailAddress,$password)
{
    $connect = new PDO('mysql:host=localhost;dbname=hireme;', 'root', 'password');
    $checkLoginQuery = "SELECT `ID`, `firstname`, `lastname` FROM `Users` WHERE `username`='$emailAddress'";
    $stmt = $connect->query($checkLoginQuery);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result)
    {
        $_SESSION["user_id"] = $result['ID'];
        $_SESSION["firstname"] = $result['firstname'];
        $_SESSION["lastname"] = $result['lastname'];
        header("Location: ../email_view.php");
    }
    else 
    {
        return false;
    }
    
}



?>
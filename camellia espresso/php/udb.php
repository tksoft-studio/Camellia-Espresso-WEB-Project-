<?php

if(isset($_POST['submit']))
{
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "web";

    $con = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $tele = $_POST['tele'];
    $pwd = $_POST['pwd'];

    $query = "insert into camellia values ('$name','$email','$address','$tele','$pwd');";
    if(empty($name)||empty($email)||empty($address)||empty($tele)||empty($pwd))
    {
        header("Location: index.php"); 
    }
    else{
        if($con ->query($query))
        {
            header("Location: check.html");
        }
    else
        {
            header("Location: index.php"); 
        }
    }
         
}

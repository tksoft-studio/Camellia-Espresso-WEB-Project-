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

    $query = "insert into form values ('$name','$email','$address','$tele');";
    if(empty($name)||empty($email)||empty($address)||empty($tele))
    {
        header("Location: index.php"); 
    }
    else{
        if($con ->query($query))
        {
            echo "Record added Successfully !";
        }
    else
        {
            header("Location: index.php"); 
        }
    }
         
}

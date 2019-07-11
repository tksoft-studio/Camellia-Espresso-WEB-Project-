<?php
   
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "web";

    $con = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $query = "SELECT * FROM camellia WHERE email = '$email' and password = '$pwd'";
    $result=mysqli_query($con,$query);

    $row = mysqli_fetch_array($result);
    if($row['email'] == $email and $row['password'] == $pwd)
    {
        header("Location: ../index.html");
    }
    else{
        echo "Failed to Login";
    }
?>
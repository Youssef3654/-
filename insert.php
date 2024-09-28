<?php

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

include "connect.php";

if (isset($_POST["SingUp"])) {
    $sql = "INSERT INTO users (username,password,email)
    
    VALUES ('$username','$password','$email')";

    if ($conn->query($sql) === TRUE) {
        echo "تم الاشتراك بنجاح";
    }

    else {
        echo "Error:".$sql."<br>".$conn->error;
    }
}


header("location:singin.php");

$conn->close()



?>

<?php
define("servername" , "localhost");
define("username" , "root");
define("password" , "");
define("dbname" , "test1");

@$conn = mysqli_connect(servername , username , password , dbname);

if (!$conn) {
    echo "connection failed : ";
}

else {
   # echo "connection OK";
}
?>
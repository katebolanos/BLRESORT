<?php
 $servername="localhost";
 $username = "root";
 $password = "";
 $database = "BLResort";

 $db = mysqli_connect($servername,$username, $password, $database);

 if(!$db)
 {
die("Connection Failed ". $db->connect_error);

 }
 ?>
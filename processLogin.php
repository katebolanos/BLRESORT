<?php
    require_once 'db.php';
    if(isset($_POST['username'])
    {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query= "SELECT * FROM guest WHERE ";
        $result = mysqli_query($db,$query);
        $count = mysqli_num_rows($result);
        while($count==1){
            $_SESSION['FirstName']=$row['FirstName'];
            $_SESSION['LastName']=$row['LastName'];
        }
    }

?>
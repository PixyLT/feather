<?php
/*
* Login information checker script.
* Returns 0 on invalid user.
* Returns 1 on correct login.
* Returns 2 on incorrect login.
*/ 
    if($_POST["username"] != null && $_POST["password"] != null){
        include("../includes/database.php");
        $sql = "SELECT username, password FROM users WHERE username = \"{$_POST["username"]}\"";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if(password_verify($_POST["password"], $row["password"])){
                echo 1;
            } else {
                echo 2;
            }
        } else {
            echo 0;
        }
    }
?>

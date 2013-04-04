<?php
    session_start();
    include("connect.php");
    
    // Prevent Cross Site Scripting Attacks
    $user_email = strip_tags($_POST['email']);
    $user_pass = strip_tags($_POST['password']);
    
    // Prevent SQL injections
    $userQuery = $connectCpanel->prepare("SELECT * FROM users WHERE email= ? AND password= ?");
    $userQuery->bind_param('ss', $user_email, $user_pass);
    if ($userQuery->execute()){
        $userQuery->store_result();
        $userQuery->bind_result($column1, $column2);
        $userQuery->fetch();
        if ($userQuery->num_rows == 1) {
            $_SESSION['username'] = $user_email;
            echo "1";
            exit();
        }
        else {
            echo "-1";
        }
    }
 

    
    
    
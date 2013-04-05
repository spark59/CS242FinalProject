<?php
    session_start();
    session_destroy();
    session_start();
    include("connect.php");
    
    // Prevent Cross Site Scripting Attacks
    $reg_email = strip_tags($_POST['regEmail']);
    $reg_pass = strip_tags($_POST['regPass']);
    
    // Check If email is already registered
    $userQuery = $connectCpanel->prepare("SELECT * FROM users WHERE email=?");
    $userQuery->bind_param('s', $reg_email);
    if ($userQuery->execute()){
        $userQuery->store_result();
        $userQuery->bind_result($column1, $column2);
        $userQuery->fetch();
        if ($userQuery->num_rows >= 1) { // Email Already exists on database!
            echo "fail";
            exit();
        }
        else { // Email does not exist. Register as new user.
            insertComment($connectCpanel, $reg_email, $reg_pass);            
            echo "success";
        }
    }
    
    // Helper function to register a new user by inserting a new user tuple into
    // the user table in the database.
    function insertComment($connection, $final_email, $final_pass) {
        $userQuery = $connection->prepare("INSERT INTO users (email, password) VALUES(?, ?)");
        $userQuery->bind_param('ss', $b_Email, $b_Text);
        $b_Email = $final_email;
        $b_Text = $final_pass;
        $userQuery->execute();
        $userQuery->store_result();
    }
?>
<?php

    $loginemail = $_POST['loginemail'];
    $loginpassword = $_POST['loginpassword'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $number = $_POST['number'];
    $signupemail = $_POST['signupemail'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

        //Database connection
        $conn = mysqli_connect('localhost','root','','login');
        if($conn->connect_error){
            die('Connection Failed :'.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into login(
            loginemail, loginpassword, firstname, lastname, number, signupemail, password, confirmpassword)
                values(?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssssssi", $loginemail, $loginpassword, $firstname, $lastname, $number,
                   $signupemail, $password, $confirmpassword);                   
                    $stmt->execute();
                    echo "registration successful";  
                    $stmt->close();
                    $conn->close();
        }
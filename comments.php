<?php

$commentsname = $_POST['commentsname'];
$commentsemail = $_POST['commentsemail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$host = "127.0.0.1";
$dbname = "comments";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
                        username: $usename,
                        password: $password,
                        database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO comments (commentsname, commentsemail, subject, message)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( !mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssii",
                        $commentsname,
                        $commentsemail,
                        $subject,
                        $message);

mysqli_stmt_execute($stmt);  

echo "Record saved.";
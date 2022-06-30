<?php
session_start();
require "dbconn.php";

if (isset($_POST['save_mem_btn'])) {

    $firstname = $_POST['firstname'];
    $firstname = $mysqli->real_escape_string($conn, $firstname);
    $lastname = $_POST['lastname'];
    $lastname = $mysqli->real_escape_string($conn, $lastname);
    $email = $_POST['email'];
    $email = $mysqli->real_escape_string($conn, $email);
    $password = $_POST['password'];
    $username = $mysqli->real_escape_string($conn, $password);
    $username = $_POST['$username'];
    $username = $mysqli->real_escape_string($conn, $username);

    $query = "INSERT INTO projet1.member(firstname, lastname, email, password, username) VALUES (:firstname, :lastname, :email,:password,:username) ";
    $query_run =$conn->prepare($query);

    $data =[
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':email' => $email,
        ':password' => $password,
        ':username' => $username,
    ];
    $query_execute = $query_run->execute($data);

    if ($query_execute) {
        $_SESSION['message'] = "Inserted Successfully";
    } else {
        $_SESSION['message'] = "Not Inserted";
    }
    header('Location: list.php');
    exit(0);


}


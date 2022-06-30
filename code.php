<?php
session_start();
require "dbconn.php";

//Code for when the delete buttons is used
if (isset($_POST['delete_btn'])) {
    $user_id = $_POST['delete_btn'];

    try {

        $query = "DELETE FROM projet1.user WHERE id=:user_id";
        $statement = $conn->prepare($query);
        $data = [':user_id' => $user_id];
        $query_execute = $statement->execute($data);

        if ($query_execute) {
            $_SESSION['message'] = "Delete Successfully";
        } else {
            $_SESSION['message'] = "Not Deleted";
        }
        header('Location: list.php');
        exit(0);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}

// Code for the Update button
if (isset($_POST['update_btn'])) {
    $user_id = $_POST['user_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    try {
        $query = "UPDATE projet1.user SET firstname=:firstname, lastname=:lastname, role=:role, email=:email, phone=:phone where id=:user_id limit 1";
        $statement = $conn->prepare($query);

        $data = [
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':role' => $role,
            ':email' => $email,
            ':phone' => $phone,
            ':user_id' => $user_id,
        ];

        $query_execute = $statement->execute($data);
        if ($query_execute) {
            $_SESSION['message'] = "Updated Successfully";
            header('Location: list.php');
        } else {
            $_SESSION['message'] = "Not Updated";
            header('Location: index.php');
        }
        exit(0);

    } catch (PDOException $e) {
        echo $e->getMessage();

    }
}


//Code for adding/inserting a new user
if (isset($_POST['save_user_btn'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $query = "INSERT INTO projet1.user (firstname, lastname, role, email, phone) VALUES (:firstname, :lastname, :role,:email,:phone)";
    $query_run = $conn->prepare($query);

    $data = [
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':role' => $role,
        ':email' => $email,
        ':phone' => $phone,
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


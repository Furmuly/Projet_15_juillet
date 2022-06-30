<?php
session_start();
require "dbconn.php";

//if condition to redirect to list if the user was added
if ((isset($_POST['list_btn']) && $_POST['username'] != "" || $_POST['password'] != "")) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM projet1.member WHERE username=:username AND password=:password ";
    $query = $conn->prepare($sql);
    $query->execute(array(':username' => $username,
        ':password' => $password));
    $row = $query->rowCount();
    $fetch = $query->fetch();

    if ($row > 0) {
        $_SESSION['user'] = $fetch['id_mem'];
        header("Location: list.php?".$fetch['id_mem']);
    } else {
        echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'login.php'</script>
				";
    }
}

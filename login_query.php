<?php
session_start();
require "dbconn.php";

//if condition to redirect to list if the user was added
if ((isset($_POST['list_btn']) && $_POST['username'] != "" || $_POST['password'] != "")) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $sql = "SELECT * FROM projet1.member WHERE username=:username AND password=:password ";
    $query = $conn->prepare($sql);
    $query->execute(array(':username' => $username,
        ':password' => $password));
    $row = $query->rowCount();
    $fetch = $query->fetch();

    // If > 0 then the user exist
    if ($row > 0) {
        //Creates the session and redirects it to list.php
        $_SESSION['user'] = $fetch['id_mem'];
        header("Location: list.php?".$fetch['id_mem']);
        die();
    } else {
        //If the inserted info is wrong then it take it back to login.php
        echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'login.php'</script>
				";
        die();
    }
}

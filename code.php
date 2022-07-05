<?php
session_start();
require "dbconn.php";


//save_event_btn to add a new event to the database
// If file upload form is submitted
$status = $statusMsg = '';
if (isset($_POST["save_event_btn"])) {
    //$title = ($_POST['title']);
    //$description = ($_POST['description']);
    $status = 'error';
    if (!empty($_FILES["image"]["name"])) {
        // Get file info
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $title = ($_POST['title']);
            $description = ($_POST['description']);


            // Insert image content into database
            $insert = $conn->query("INSERT into projet1.event  (title, image, description, created) VALUES ('$title','$imgContent','$description', NOW())");

            if ($insert) {
                $status = 'success';
                $statusMsg = "File uploaded successfully.";
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select an image file to upload.';
    }
    header('Location: view_event.php');
    exit(0);
}

// Display status message
echo $statusMsg;




//pass_btn to reset the password
if(isset($_POST['pass_btn'])) {
$mem_id = $_POST['mem_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['$username'];


try {
$query = "UPDATE projet1.member SET password=:password where id_mem=:id_mem limit 1";
$statement = $conn->prepare($query);

$data = [
'$:password' => $password,
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


//Code for the save_mem_btn to save new Members
if (isset($_POST['save_mem_btn'])) {

$firstname = htmlspecialchars($_POST['firstname']);
//$firstname = $mysqli->real_escape_string($conn, $firstname);
$lastname = htmlspecialchars($_POST['lastname']);
//$lastname = $mysqli->real_escape_string($conn, $lastname);
$email = htmlspecialchars($_POST['email']);
//$email = $mysqli->real_escape_string($conn, $email);
$password = htmlspecialchars($_POST['password']);
//$username = $mysqli->real_escape_string($conn, $password);
$username = htmlspecialchars($_POST['$username']);
//$username = $mysqli->real_escape_string($conn, $username);

$query = "INSERT INTO projet1.member(firstname, lastname, email, password, username) VALUES (:firstname, :lastname, :email,:password,:username) ";
$query_run = $conn->prepare($query);

$data = [
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

//Code for adding/inserting a new user
if (isset($_POST['save_user_btn'])) {

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$role = $_POST['role'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$phone = '000-000-00-00';
if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}$/", $phone))


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





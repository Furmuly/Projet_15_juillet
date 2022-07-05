<?php
include("dbconn.php");
?>
<!doctype html >
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="wide=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title> Edit & Update data in database using php pdo</title>
</head>
<body style="background-image: url('photo/JOBK_Img_HeaderDesktop_Home.jpg')">
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card" style="background-color: #f1e2d8">
                <div class="card-header">
                    <h3>Update the password</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="send_link.php">
                        <div class="mb-3">
                            <p>Enter Email Address To Send Password Link</p>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="email">
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="submit_email">
                        </div>
                    </form>
</body>
</html>

<?php
session_start();

?>

<!doctype html >
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="wide=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title> Form d'inscription</title>
</head>
<body style="background-image: url('../photo/JOBK_Img_HeaderDesktop_Home.jpg')">

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card" style="background-color: #f1e2d8">
                <div class="card-header">
                    <h3>Form to register a new member
                        <a href="list.php" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <!-- Sending the form to register_query.php to add to database -->
                    <form action="register_query.php" method="post">

                        <div class="mb-3">
                            <label>
                                Your First Name :
                                <input type="text" class="form-control" name="firstname" required
                                       placeholder="Enter here"/>
                        </div>

                        <div class="mb-3">
                            <label for="lastname">
                                Your Last Name :
                                <input type="text" class="form-control" name="lastname" required
                                       placeholder="Enter here"/>
                        </div>


                        <div class="mb-3">
                            <label for="email">
                                Your email :
                                <input type="email" name="email" class="form-control" required
                                       placeholder="Enter here"/>
                        </div>


                        <div class="mb-3">
                            <label for="password">
                                Enter a password (8 characters minimum) :
                                <input type="password" name="password" class="form-control" minlength="8" required
                                       placeholder="Enter here"/>
                        </div>

                        <div class="mb-3">
                            <label for="username">
                                Your Last Name :
                                <input type="text" class="form-control" name="username" required
                                       placeholder="Enter here"/>
                        </div>

                        <!-- the save button to insert a new member into database -->
                        <div class="mb-3">
                            <button name="save_mem_btn" type="submit" class="btn btn-primary">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

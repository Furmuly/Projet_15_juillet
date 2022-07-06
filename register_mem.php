<?php
session_start();
require "header.php";

?>

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
                    <form action="code.php" method="post">

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
                                       placeholder="Enter here" autocomplete="off"/>
                        </div>

                        <!-- <div class="mb-3">
                            <label for="password_retype">
                                <input type="password" name="password_retype" class="form-control"
                                       placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                        </div> -->

                        <div class="mb-3">
                            <label for="username">
                                Add a username :
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



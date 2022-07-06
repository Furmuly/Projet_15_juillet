<?php
include("dbconn.php");
require "header.php";
?>

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


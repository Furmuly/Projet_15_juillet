<?php
require "dbconn.php";
require "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card" style="background-color: #f1e2d8">
                <div class="card-header">
                    <h3>Event form
                        <a href="login.php" class="btn btn-primary float-end"> List </a>
                        <a href="view_event.php" class="btn btn-primary float-end"> All_events </a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="title">
                                Enter the event Title :
                                <input type="text" class="form-control" name="title" placeholder="event_title"/>
                        </div>
                        <div class="col-sm-10">
                            <input type="file" name="image">
                        </div>
                        <div class="form_group">
                            <label for="description">
                                Description : </label>
                            <textarea class="form-control" name="description" id="text_area" rows="4"></textarea>
                        </div>

                        <!-- the save button to insert a new event into database -->
                        <div class="mb-3">
                            <button name="save_event_btn" type="submit" class="btn btn-primary">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>


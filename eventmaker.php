<?php
require "dbconn.php";

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Form inscription</title>
</head>
<body style="background-image: url('photo/JOBK_Img_HeaderDesktop_Home.jpg')">
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card" style="background-color: #f1e2d8">
                <div class="card-header">
                    <h3>Event form
                        <a href="login.php" class="btn btn-primary float-end"> List </a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label>
                                Enter the event Title :
                                <input type="text" class="form-control" name="event_title" placeholder="event_title"/>
                        </div>
                        <div class="col-sm-10">
                            <input type="file" name="image">
                        </div>
                        <div class="form_group">
                            <label for="text_area">
                                Description ; </label>
                            <textarea class="form-control" id="text_area" rows="4"></textarea>
                        </div>

                        <!-- the save button to insert a new event into database -->
                        <div class="mb-3">
                            <button name="save_event_btn" type="submit" class="btn btn-primary">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

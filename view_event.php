<?php
// Include the database configuration file
require_once 'dbconn.php';
require "header.php";

?>

<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-12 mt-4">
            <div class="card" style="background-color: #f1e2d8">
                <div class="card-header" style="background-color: #0f7a57">
                    <h1>Events list
                        <a href="login.php" class="btn btn-primary float-end"> List </a>
                    </h1>
                </div>
                <?php
                $query = "SELECT * FROM projet1.event";
                $statement = $conn->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                if ($result) {
                    foreach ($result

                             as $row) {
                        ?>
                        <div class="align-self-center mt-5 md-5">
                            <div class="align-self-center">
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
                                     class="img-fluid" alt="image" style="width:100%" height="auto">
                                <div class="card-body">
                                    <div class="card-header text-center"><?php echo $row['title']; ?>"</div>
                                    <p class="card-text"><?php echo $row['description']; ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit
                                            </button>
                                        </div>
                                        <small class="text-muted"><?php echo $row['created']; ?>"</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <p class="status error">Image(s) not found...</p>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>







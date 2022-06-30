<?php session_start();
include("dbconn.php");

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
            <?php if (isset($_SESSION['message'])) : ?>
                <h5 class="alert alert-success"> <?= $_SESSION['message']; ?> </h5>
                <?php
                unset($_SESSION['message']);
            endif; ?>
            <div class="card" style="background-color: #f1e2d8">
                <div class="card-header">
                    <h3>Participents list
                        <a href="index.php" class="btn btn-primary float-end">Back</a>
                        <a href="register_user.php" class="btn btn-primary float-end"> Add user</a>
                        <a href="register_mem.php" class="btn btn-primary float-end"> Add member</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>role</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM projet1.user";
                        $statement = $conn->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        if ($result) {
                            foreach ($result as $row) {
                                ?>
                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['firstname']; ?></td>
                                    <td><?= $row['lastname']; ?></td>
                                    <td><?= $row['role']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['phone']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post">
                                            <button type="submit" name="delete_btn" value="<?= $row['id']; ?>"
                                                    class="btn btn-danger">Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php

                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="6"> No Record Found</td>
                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
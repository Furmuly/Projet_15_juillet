<?php
include("dbconn.php");
require "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Edit and Update data
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $user_id = $_GET['id'];

                        $query = "SELECT * FROM projet1.user where id=:user_id";
                        $statement = $conn->prepare($query);
                        $data = [':user_id' => $user_id];
                        $statement->execute($data);

                        $result = $statement->fetch(PDO::FETCH_ASSOC);
                    }
                    ?>

                    <form action="code.php" method="post">

                        <input type="hidden" class="form-control" name="user_id" value="<?= $result['id'] ?>"/>

                        <div class="mb-3">
                            <label for="firstname">
                                Your First Name :
                                <input type="text" class="form-control" name="firstname"
                                       value="<?= $result['firstname'] ?>" placeholder="first_name"/>
                        </div>

                        <div class="mb-3">
                            <label for="lastname">
                                Your Last Name :
                                <input type="text" class="form-control" name="lastname"
                                       value="<?= $result['lastname'] ?>" placeholder="last_name"/>
                        </div>


                        <div class="mb-3">
                            <label for="role">
                                Role :
                                <select name="role" value="<?= $result['role'] ?>" class="form-control">
                                    <option>Trikie</option>
                                    <option>apprenti/e</option>
                                    <option>autre</option>
                                </select>
                        </div>


                        <div class="mb-3">
                            <label for="email">
                                Your email :
                                <input type="email" name="email" value="<?= $result['email'] ?>" class="form-control"
                                       placeholder="email"/>
                        </div>


                        <div class="mb-3">
                            <label for="phone">
                                Your Phone Number :
                                <input type="tel" name="phone" value="<?= $result['phone'] ?>" class="form-control"
                                       placeholder="phone_number"/>
                        </div>

                        <div class="mb-3">
                            <button name="update_btn" type="submit" class="btn btn-primary">Submit update
                            </button>
                        </div>
                    </form>
                </div>
            </div>



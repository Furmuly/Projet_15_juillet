<?php
// Include the database configuration file
require_once 'dbconn.php';

?>


<!doctype html >
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="wide=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Form d'inscription</title>
</head>

<body style="background-image: url('photo/JOBK_Img_HeaderDesktop_Home.jpg')">
<div class="container overflow-hidden">
    <div class="row gx-5">

            <div class="card" style="background-color: #f1e2d8">

                    <?php
                    $query = "SELECT * FROM projet1.event order by id desc ";
                    $statement = $conn->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    if ($result){
                    foreach ($result

                    as $row){
                    ?>

                <div class="container-fluid col-md-10 mt-4 p-5 bg-white text-white text-center">
                        <h1><?= $row['title']; ?></h1>
                    </div>

                    <div class="text-center mt-4">
                        <img class="img-fluid"  height="auto" alt="Responsive image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"/>
                    </div>
                    <div class="container">
                            <textarea class="form-control mt-5"   id="text_area"  <?= $row['description']; ?>> </textarea>
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

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>










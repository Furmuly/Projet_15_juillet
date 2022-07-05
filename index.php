<!doctype html >
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
                <div class="card-header" >
                    <h3>Form d'inscription
                        <a href="login.php" class="btn btn-primary float-end"> List </a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post">

                        <div class="mb-3">
                            <label>
                                Your First Name :
                                <input type="text" class="form-control" name="firstname" placeholder="first_name"/>
                        </div>

                        <div class="mb-3">
                            <label for="lastname">
                                Your Last Name :
                                <input type="text" class="form-control" name="lastname" placeholder="last_name"/>
                        </div>


                        <div class="mb-3">
                            <label for="role">
                                Role :
                                <select name="role" class="form-control">
                                    <option value="0">Trikie</option>
                                    <option value="1">apprenti/e</option>
                                    <option value="2">autre</option>
                                </select>
                        </div>


                        <div class="mb-3">
                            <label for="email">
                                Your email :
                                <input type="email" name="email" class="form-control" placeholder="email"/>
                        </div>


                        <div class="mb-3">
                            <label for="phone">
                                Your Phone Number :
                                <input type="tel" name="phone" class="form-control" autocomplete="off" placeholder="phone_number"/>
                        </div>

                        <!-- the save button to insert data into database -->
                        <div class="mb-3">
                            <button name="save_btn" type="submit" class="btn btn-primary">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


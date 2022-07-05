<!doctype html >
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="wide=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title> Insert data into database using php pdo</title>
</head>
<body style="background-image: url('photo/JOBK_Img_HeaderDesktop_Home.jpg')">

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card" style="background-color: #f1e2d8">
                <div class="card-header">
                    <h3>Insert data into database using php pdo
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">

                    <form action="code.php" method="post">

                        <div class="mb-3">
                            <label for="firstname">
                                Your First Name :
                                <input type="text" class="form-control" name="firstname" required
                                       placeholder="first_name"/>
                        </div>

                        <div class="mb-3">
                            <label for="lastname">
                                Your Last Name :
                                <input type="text" class="form-control" name="lastname" required
                                       placeholder="last_name"/>
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
                                <input type="email" name="email" class="form-control" required placeholder="email"/>
                        </div>


                        <div class="mb-3">
                            <label for="phone">
                                Your Phone Number :
                                <input type="tel" name="phone" class="form-control" required="required"
                                       placeholder="000-000-00-00"/>
                        </div>

                        <div class="mb-3">
                            <button name="save_user_btn" type="submit" class="btn btn-primary">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
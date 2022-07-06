<?php
//Starts the session
session_start();
require "header.php";
?>

<div class="container mt-3">
    <div class="card" style="background-color: #f1e2d8">
        <div class="card-header">
    <h3>Connect to your account to have access
        <a href="index.php" class="btn btn-primary float-end"> Back </a></h3>
    <p>Enter the given username and password.</p>
        </div>
    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
        <script>
            (function () {
                // removing the message 3 seconds after the page load
                setTimeout(function () {
                    document.querySelector('.msg').remove();
                }, 3000)
            })();
        </script>
    <?php
    endif;
    // clearing the message
    unset($_SESSION['message']);
    ?>

        <div class="card-body">
    <form action="login_query.php" method="post">
        <div class="mb-3 mt-3">
            <label for="uname" class="form-label">Username:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
            <label class="form-check-label" for="myCheck">I agree on blabla.</label>

            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Check this checkbox to continue.</div>
        </div>
        <!-- submit button to later redirect to list.php if user was authorised -->
        <button type="submit" name="list_btn" class="btn btn-primary">Submit</button>
        <!-- takes us to password reset page -->
        <a href="reset_pass.php" class="btn btn-primary float-end"> Forgot password </a>

    </form>
</div>


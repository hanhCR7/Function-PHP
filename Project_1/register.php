<?php
    include "./connect/connect.php";

    if(isset($_POST['btn'])){
        echo "adasdasdas";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./css/register.css">
    <title>Đăng ký</title>
</head>
<body>
    <form action="register.php" method="post">
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Username</label>
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" id="form3Example4" class="form-control" />
            <label class="form-label" for="form3Example4">Password</label>
        </div>

        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
            <label class="form-check-label" for="form2Example33">
            Subscribe to our newsletter
            </label>
        </div>

        <!-- Submit button -->
        <button data-mdb-ripple-init type="submit" name="btn" class="btn btn-primary btn-block mb-4">Sign up</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>or sign up with:</p>
            <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
            </button>

            <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-google"></i>
            </button>

            <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-twitter"></i>
            </button>

            <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-github"></i>
            </button>
        </div>
    </form>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>
</html>
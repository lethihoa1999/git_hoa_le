<?php
session_start();
require 'RegisterController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <title>login</title>
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="justify-content-center row"> 
            <div class="col-lg-8">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                    </div>
                    <form class="user" action="RegisterController.php" method="post">
                        <div class="form-group">
                            <input type="email" name="mail" class="form-control form-control-user" id="mail" aria-describedby="emailHelp" placeholder="Email"  value="<?php if (isset($_SESSION['mail'])) {echo $_SESSION['mail'];}?>">
                            <code>
                                <?php 
                                if (isset($_SESSION['flash']['mail'])) {
                                    print_r($_SESSION['flash']['mail']);
                                }
                                ?>
                            </code>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password" value="<?php if (isset($_SESSION['password'])) {echo $_SESSION['password'];}?>">
                            <code>
                                <?php 
                                if (isset($_SESSION['flash']['password'])) {
                                    print_r($_SESSION['flash']['password']);
                                } else {
                                    if (isset($_SESSION['flash']['login'])) {
                                        print_r($_SESSION['flash']['login']);
                                    }
                                }
                                ?>
                            </code>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div>
                        </div>
                        
                        <button name="btn_login" type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="RegisterPdo.php">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <script src="../vendor/twbs/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="../vendor/twbs/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html> 

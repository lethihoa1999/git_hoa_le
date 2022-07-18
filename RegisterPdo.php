<?php
session_start();
require 'RegisterController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <div class="justify-content-center row">
      <div class="col-lg-8">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Register an account</h1>
          </div>
          <form class="user" action="RegisterController.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control form-control-user" name="name" id="name" placeholder="Name" value="<?php if (isset($_SESSION['name'])) {echo $_SESSION['name'];}?>">
              <code>
                <?php 
                if (isset($_SESSION['flash']['name'])) {
                  print_r($_SESSION['flash']['name']);
                } 
                ?>
              </code>
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" name="phone" id="phone" placeholder="phone" value="<?php if (isset($_SESSION['phone'])) {echo $_SESSION['phone'];}?>">
              <code>
                <?php
                if (isset($_SESSION['flash']['phone'])) {
                  print_r($_SESSION['flash']['phone']);
                } 
                ?>
              </code>
            </div>
            <div class="form-group">
              <input type="email" class="form-control form-control-user" name="mail" id="email" placeholder="Email" value="<?php if (isset($_SESSION['mail'])) {echo $_SESSION['mail'];}?>">
              <code>
                <?php 
                if (isset($_SESSION['flash']['mail'])) {
                  print_r($_SESSION['flash']['mail']);
                } 
                ?>
              </code>
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" name="address" id="address" placeholder="Address" value="<?php if (isset($_SESSION['address'])) {echo $_SESSION['address'];}?>">
              <code>
                <?php 
                if (isset($_SESSION['flash']['address'])) {
                  print_r($_SESSION['flash']['address']);
                } 
                ?>
              </code>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                <code>
                  <?php
                  if (isset($_SESSION['flash']['password'])) {
                    print_r($_SESSION['flash']['password']);
                  } 
                  ?>
                </code>
              </div>
              <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" id="confirm-password" name="confirm_password" placeholder="Confirm password">
                <code>
                  <?php 
                  if (isset($_SESSION['flash']['confirm_password'])) {
                    print_r($_SESSION['flash']['confirm_password']);
                  }
                  unset($_SESSION['flash']); 
                  ?>
                </code>
              </div>
            </div>
            <button type="submit" name="btnRegister" class="btn btn-primary btn-user btn-block">Register</button>
          </form>
          <hr>
          <div class="text-center">
              <a class="small" href="LoginPdo.php">Already have an account? Login!</a>
          </div>
        </div>
      </div>        
    </div>
  </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/twbs/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="../vendor/twbs/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html> 

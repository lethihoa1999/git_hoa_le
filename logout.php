<?php
session_start();
session_destroy();
setcookie("user", $cookie_value, time() - (86400 * 30), "/");
header("Location: LoginPdo.php");

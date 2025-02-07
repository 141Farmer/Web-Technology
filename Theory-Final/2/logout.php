<?php
session_start();
session_destroy();
unset($_COOKIE["user_id"]);
header("Location: login.php");
exit();
?>

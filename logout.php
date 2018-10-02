<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["id"]);
session_destroy();
header("Location:index.php");
?>

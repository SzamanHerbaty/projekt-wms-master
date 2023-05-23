<?php
include_once('functions.php');
unset($_SESSION['adminId']);
header('Location: index.php');
exit();
?>

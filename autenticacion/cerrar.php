<?php
session_start();
session_destroy();


header("Location: ../autenticacion/login.php");
exit;
?>
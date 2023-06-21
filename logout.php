<?php
//Codigo para cerrar sesión
session_start();
session_unset();
session_destroy();
header("Location: /PayUTick/index.php");
?>
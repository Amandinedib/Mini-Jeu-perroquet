<?php
// DECONNEXION DU MINI JEU
session_start();
session_destroy();
header("location:minijeu.php?");
?>
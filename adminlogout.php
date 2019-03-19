<?php

// Započni novu ili nastavi postojeću sesiju
session_start();

// Poništi sve sesijske varijable
session_unset();

// Uništi sesiju
session_destroy();


echo "<script> window.location.assign('index.php'); </script>";
?>

<?php

// Započni novu ili nastavi postojeću sesiju
session_start();

// Poništi sve sesijske varijable
session_unset();

// Uništi sesiju
session_destroy();

// Preusmjeri na index.php
echo "<script> window.location.assign('kraj.html'); </script>";
?>
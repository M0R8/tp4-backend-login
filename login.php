<?php
$user = $_POST["user"];
$pass = $_POST["pass"];

$usuario = "admin";
$contra = "1234";

if ($user == $usuario && $pass == $contra) {
    header("location: https://www.google.com/");
} else {
    header("location: error.html");
}

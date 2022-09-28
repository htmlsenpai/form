<?php

// tomar los datos del formulario 
$id = $_POST['id'];
$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['pass1'];

// crear conexion a la db
include 'conn.php';

// crear la query con la que introducimos los datos en la tabla users

$user = "INSERT INTO users(user, email, password)
VALUES ('$user', '$email', '$password')";

// (id, user, email, password)
// VALUES ('', '', '', '')

if ($conn->multi_query($user) === TRUE) {
    echo 'Datos introducidos correctamente';
} else {
    echo 'Ha habido un error al introducir los datos: ' . $conn->error;
}



?>
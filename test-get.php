<?php 
// Tomamos las variables superglobales, enviadas desde el formulario.


$user = $_GET['user'];
$email = $_GET['email'];
$password = $_GET['pass1'];

echo 'Your data: <br> User: ' . $user . '<br>' .
'Email: ' . $email . '<br>' .
'Password:' . $password;

// El método GET es sencillo pero no se considera seguro, 
// porque no almacena los datos.
// si no que los envia escritos en el propìo link.
?>
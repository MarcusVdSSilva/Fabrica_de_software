<?php

require('login.php');
$nome = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['password'];

$cadastra = new Login();

$cadastro = $cadastra->cadastrar($nome,$email,$senha);

?>
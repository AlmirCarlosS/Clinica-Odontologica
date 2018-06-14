<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$table = array();
$table['usuario'] = "admin";
$table['senha'] = "12345";

if($usuario == $table['usuario'] && $senha == $table['senha']) {
session_start();
$_SESSION['usuario'] = $usuario;
$_SESSION['senha'] = $senha;
header("Location: principal.php");
}
else
header("Location: pagina01.php");
?>
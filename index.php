<?php
require 'usuario.class.php';

$usuario = new Usuario(1);
$usuario->delete();

echo "Usuario deletado com sucesso!";


?>
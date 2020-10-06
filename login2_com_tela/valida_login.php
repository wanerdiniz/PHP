<?php

require_once("funcoes_valida_login.php");

$login_usuario = $_POST['login'];
$senha_usuraio = $_POST['senha'];

$usuario_validado = valida_login($login_usuario, $senha_usuraio);

if ($usuario_validado) {
    echo "Acesso liberado!";
    require_once("funcaopage.php");
}else{
    echo "Acesso negado!";
    require_once("cadastro.php");
}


?>
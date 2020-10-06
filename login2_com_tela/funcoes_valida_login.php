<?php
    function valida_login($login, $senha){

        $login_bd = "wanerdiniz";
        $senha_bd = "senha";

        if($login == $login_bd && $senha == $senha_bd)

        { 
            return true;

        }return false;

    }

?>
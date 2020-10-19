<?php
class bd{

    private $host = "localhost";

    private $usuario = "root";

    private $senha = "";

    private $banco = "concessionaria";

    public function bd_conexao() {
        /*criar conexao*/

        $con = mysqli_connect ($this->host, $this->usuario, $this->senha, $this->banco);

        mysqli_set_charset($con, "utf8");

        if (mysqli_connect_error()) {
            echo "A conexao apresentou um erro.".mysqli_connect_error();
        }
        return $con;
    }
}

?>
<?php
require_once("conexao_bd.php");


$chassi  = $_POST['chassi'];
$cod_modelo =  $_POST['cod_modelo'];
$cod_cor =  $_POST['cod_cor'];
$cod_combustivel =  $_POST['cod_combustivel'];
$cod_marca =  $_POST['cod_marca'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$potencia = $_POST['potencia'];
$ano_fabricacao = $_POST['ano_fab'];
$portas = $_POST['num_portas'];
$KM = $_POST['km'];
$valor = $_POST['valor'];
$placa = $_POST['placa'];

$objDb = new bd();
$link = $objDb->bd_conexao();

//cod_modelo, cod_cor, cod_combustivel, cod_marca,

$sql = "insert into veiculo(chassi, cod_modelo, cod_cor, cod_combustivel, cod_marca, pais, estado, potencia, ano_fabricacao, num_portas, km_rodados, valor, placa) values ('$chassi', '$cod_modelo', '$cod_cor', '$cod_combustivel', '$cod_marca', '$pais','$estado', '$potencia', '$ano_fabricacao', '$portas', '$KM', '$valor', '$placa')";

if (mysqli_query($link, $sql)){
	require_once("veiculo.php");
    echo "Veículo registrado com sucesso";

}else{
    echo "Erro ao registrar o Veículo!";
}



?>

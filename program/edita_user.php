<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <title> Cadastro de Veículo </title>
        <meta charset = "UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<link rel="stylesheet" href="style.css">
    </head>
    <body>
		
		<div class="container">
			<div class="row">
				<h1>Informações do veículo:</h1>

				<div class= "logo">
				<img src="UWS.png" width="200" height="150">
				</div>
			</div>

			<div class="row">
    			<div class="col-md-4">

				</div>

       		 		<form role = "form"  action="editar.php" method="post" >
						<div class="form-group">
							<label>Chassi:</label>
							<input type="text" class="form-control" id="chassi" name="chassi">
						</div>

						<div class="form-group">
							<label>Código do Modelo:</label>
							<input type="text" class="form-control" id="cod_modelo" name="cod_modelo">
						</div>						

						<div class="form-group">
							<label>Código da Cor:</label>
							<input type="text" class="form-control" id="cod_cor" name="cod_cor">
						</div>

						<div class="form-group">
							<label>Código do Combustivel::</label>
							<input type="text" class="form-control" id="cod_combustivel" name="cod_combustivel">
						</div>

						<div class="form-group">
							<label>Código da Marca::</label>
							<input type="text" class="form-control" id="cod_marca" name="cod_marca">
						</div>


						<div class="form-row">
   							<div class="form-group col-md-6">
      						<label>País: </label>
      						<select class="form-control" id="pais" name="pais">
								<option value="">Selecione</option>
   								<option value="brasil">Brasil</option>
    							<option value="japao">Japão</option>
   								<option value="portugal">Portugal</option>
    							<option value="EUA">Estados Unidos</option>
								<option value="...">...</option>
							</select>
   						</div>
    					
						<div class="form-group col-md-6">
      						<label>Estado: </label>
							  <select class="form-control" id="estado" name="estado">
								<option value="">Selecione</option>
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espirito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MT">Mato Grosso</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
								<option value="...">...</option>
							</select>
    					</div>
  					
						<div class="form-row">
   							<div class="form-group col-md-6">
      						<label>Potência: </label>
      						<input type="text" class="form-control" id="potencia" name="potencia">
   						</div>
    					
						<div class="form-group col-md-6">
      						<label>Ano de Fabricação </label>
							<input type="number" class="form-control" id="ano_fab" name="ano_fab">
						</div>

						<div class="form-group col-md-6">
							<label>Portas:</label>
							<input type="number" class="form-control" id="num_portas" name="num_portas">
						</div>


						<div class="form-group col-md-6">
							<label>KM:</label>
							<input type="number" class="form-control" id="km" name="km">
						</div>  

						<div class="form-group col-md-6">
							<label>Placa:</label>
							<input type="text" class="form-control" id="placa" name="placa">
						</div> 

						<div class="form-group col-md-6">
							<label>Valor:</label>
							<input type="number" class="form-control" id="valor" name="valor">
						</div> 

						<button type="submit" class="btn btn-primary">Registrar</button>
						<button type="submit" class="btn btn-primary">Editar</button>
   					</form>
				</div>
		</div>
    </body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Operadores</title>
    <link rel="stylesheet" href="style2.css">

</head>
<body>
    <div class="container">
        <div class="titulo">
            <h1>CALCULADORA:</h1>
        </div>
        
        <div class="formula">
            <div class="col-md-4">
                 <form role="form" action="funcaopage.php" method="post">
            </div>

            <div class= "tipo">
                <h1>Escolha o tipo de operação:</h1>

                <label for="Soma">Soma + :</label>
                <input type="radio" name="oper" value="1" id="soma"/><br>

                <label for="Subtracao"> Subtração - :</label>
                <input type="radio" name="oper" value="2" id="sub"/><br>

                <label for="Divisao">Divisão ÷ :</label>
                <input type="radio" name="oper" value="3" id="divisao"/><br>

                <label for="Multiplicao">Multiplicação x :</label>
                <input type="radio" name="oper" value="4" id="multi"/><br>

            </div>


            <div class='escolha'>
                <h1>Digite os números da operação:</h1>

                <label for="NumeroUM"> Informe primeiro número:</label>
                <input type="number" name="numA" id="numA"><br><br>

                <label for="NumeroUM"> Informe segundo número:</label>
                <input type="number" name="numB" id="numB"><br>
            </div>

            <div class="resultt">

                <h2>Clique no botão para ver o resultado:</h2>

                
                <button type="submit"class="btn btn-default">Ver Resultado</button>
                    
                
                   <div class="php"> 

                        <?php
                            require_once("funcoes.php");
                            $opera = $_POST["oper"];

                            if($opera == 1) {
                                soma($_POST["numA"],$_POST["numB"]);

                            }
                            
                            else if ($opera == "2"){
                                subt($_POST["numA"],$_POST["numB"]);
                            
                            }
                            
                            else if ($opera == "4"){
                                multi($_POST["numA"],$_POST["numB"]);
                            }
                            
                            else if ($opera == "3"){

                                if($opera == "3")

                                divi($_POST["numA"],$_POST["numB"]);    
                            } 

                        ?>
                  </div>

                </div>
                
                </form>
            </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
        </div>

       

    </div>
</body>
</html>
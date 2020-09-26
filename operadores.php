<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Operadores</title>


</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Teste Operadores</h1>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                 <form role="form" action="operadores.php" method="POST">
            </div>

            <div class= num>
                <h1>Escolha o tipo de operação</h1>

                <label for="Comparação">Comparação</label>
                <input type="radio" name="oper" value="1" id="Comparacao"/><br>

                <label for="Identico">Identico</label>
                <input type="radio" name="oper" value="2" id="Identico"/><br>

                <label for="Maior">Maior ou igual</label>
                <input type="radio" name="oper" value="3" id="Maior"/><br>

                <label for="Maior">Menor ou igual</label>
                <input type="radio" name="oper" value="4" id="Menor"/><br>

                <label for="Operadorlogico">Operador lógico AND </label>
                <input type="radio" name="oper" value="5" id="Operadorlogico"/><br>

                <label for="Operadorlogico">Operador lógico OR </label>
                <input type="radio" name="oper" value="6" id="Operadorlogico"/><br>

                <label for="Diferente">Diferente</label>
                <input type="radio" name="oper" value="7" id="Diferente"/><br>


            </div>

            <div class='dignum'>
                <h1>Digite os números que você quiser:</h1>

                <label for="NumeroUM">Comparador lógico de UM NÚMERO QUE VOCÊ QUISER com números do espaço A e B</label>
                <input type="number" name="numC" id="numC"><br><br>

                <label for="NumeroUM"> Informe primeiro número:</label>
                <input type="number" name="numA" id="numA">

                <label for="NumeroUM"> Informe outro segundo número:</label>
                <input type="number" name="numB" id="numB"><br>

                

            </div>

                <h2>Clique no botão para ver o resultado:</h2>

                
                <button type="submit"class="btn btn-default">Ver Resultado</button>
                    </form>
            </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
        </div>

        <div class="row">

        <?php
            $numC = $_POST['numC'];

            $numA = $_POST['numA'];
            $numB = $_POST['numB'];
        
            $eia = $_POST["oper"];

         if($eia == "1") {

            { if($numA == $numB) { 
                echo "Os números são iguais em comparação:";
             } else {
                 echo "Os números são diferentes em comparação:";
             }
          }
         
         }else if ($eia == "2"){

            { if($numA === $numB) { 
                echo "Os números $numA é identico ao $numB";
             } else {
                echo "O número $numA não é identico ao $numB";
             }
          }

         }else if ($eia == "3"){

            { if($numA > $numB) { 
                echo "Numero $numA é maior que $numB";
             } else {
                if($numA >= $numB) { 
                    echo "Numero $numA é igual $numB";
                 } else {
                    echo "Numero $numA não é maior que $numB";
                 }
             }
          }

         }else if ($eia == "4"){

            { if($numA < $numB) { 
                echo "Numero $numA é menor que $numB";
             } else {
                if($numA <= $numB) { 
                    echo "Numero $numA é igual $numB";
                 } else {
                     echo "Numero $numA não é menor que $numB";
                 }
             }
          }

         }else if ($eia == "5"){
            var_dump($numA > $numC && $numB < $numC);
        
        
         }else if ($eia == "6"){
            var_dump($numA > $numC OR $numB < $numC);

        
        }else if ($eia == "7"){

            { if($numA === $numB) { 
                echo "Os números $numA não é Diferente do $numB";
             } else {
                echo "O número $numA é Diferente do $numB";
             }
          }
        }
         ?>
      

        </div>

    </div>
</body>
</html>
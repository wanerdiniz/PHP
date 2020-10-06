<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CADASTRE AQUI:</h1>

        <form action="valida_login.php" method="post">

            <div class="input">
                <div class="inputBox">
                    <label>
                        Usuário:
                        <input type="text" name="login" placeholder="Nome de usuário">
                    </label>
                </div>

                <div class="inputBox">
                    <label>
                        Senha:
                        <input type="password" name="senha" placeholder="*******">
                    </label>
                </div>

                
                <input class="logue" type="submit" value="logar">
                
            </div>
           
        </form>
    
</body>
</html>
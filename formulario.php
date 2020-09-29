<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="row">
  <form method="post" action="cadastrousu.php" id="formCadastro" name="formCadastro">

    <div class="form-group">
    <label for="nomecompleto">Nome Usuário</label>
        <input type="text" class="form-control" id="nome" name="nome">

        <label for="Email1">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha">
    </div>

    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="valid" name="valid"> 
        <label class="form-check-label" for="valid">Aceite os termos</label>
    </div>

    <h4>Escolha que está usando:</h4>

    <div class="form-group form-check">
        <input type="radio" class="form-check-input" id="sistema" name="sistema" value="windows 7"> 
        <label class="form-check-label" for="valid">windows 7</label>
    </div>

    <div class="form-group form-check">
        <input type="radio" class="form-check-input" id="sistema" name="sistema" value= "windows 8"> 
        <label class="form-check-label" for="valid">windows 8</label>
    </div>

    <div class="form-group form-check">
        <input type="radio" class="form-check-input" id="sistema" name="sistema" value="windows 10"> 
        <label class="form-check-label" for="valid">windows 10</label>
    </div>

        <h5>Escolha um número:</h5>
    
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="numeros" name="numeros[]" value="10"> 
        <label class="form-check-label" for="valid">10</label>
    </div>

    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="numeros" name="numeros[]" value= "100"> 
        <label class="form-check-label" for="valid">100</label>
    </div>

    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="numeros" name="numeros[]" value="1000"> 
        <label class="form-check-label" for="valid">1000</label>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Select</label>
      <select id="selec" class="form-control" name="selec">
        <option selected>Escolha</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Area de texto</label>
        <textarea class="form-control" id="texto"  name="texto" rows="3"> </textarea>
    </div>

    
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    
  </div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
</body>
</html>
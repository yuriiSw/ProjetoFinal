<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="imagem/png" href="img/icon2.png"/>  
    <title>Login Sistema</title>
</head>
<body>
<img src="img/imglogin.png"
>
<div class="login-box">
  <h2>Login</h2>
<form id="formlogin" action="../controler/liberaAcesso.php" method="post">
  <div class="user-box">
    <label for="exampleInputEmail1" class="form-label"></label>
    <h5>Email</h5>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp"</div>
  </div>
  <div class="user-box">
  <h5>Senha</h5>
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
    <button type="submit" class="btn btn-primary">Logar</button>
  </div>


 
</form>
</div>

</body>
</html>
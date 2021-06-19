<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>tela de login</title>
    
  </head>
  <body>
      <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">Login</h1>
                <div class="card-text">
                    <form action="logar.php" method="POST">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" type="email" class="form-control form-control-sm" id="email">
                        </div>
                        <div class="form-group">
                            <label for="">Senha</label>
                            <a href="" style="float: right; font-size: 12px; ">Esqueceu a senha?</a>
                            <input name="senha" type="password" class="form-control form-control-sm" id="senha">
                        </div>
                        <button class="btn btn-primary btn-block">LOGIN</button>
                        <div class="signup">
                            Não tem conta ainda? <a href="">Cria uma agora!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  </body>
</html>

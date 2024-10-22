<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>FitTrack Login</title>
</head>
<body>
    
    <main>
        <div class="container-main">
            <div class="container-imagem">
                <img src="images/undraw_Access_account_re_8spm.png" alt="Imagem Login">
            </div>
            <div class="container-main-login">
                <div class="container-main-login-titulo">
                    <h2>Fit<span>Track</span></h2>
                    <h3>Login.</h3>
                </div>
                <form action="">
                    <div class="form-floating">
                        <input type="email" class="form-control" placeholder="" required>
                        <label for="email">E-Mail</label>
                    </div>
                    
                    <div class="form-floating">
                        <input type="password" class="form-control" placeholder="" required>
                        <label for="senha">Senha</label>
                    </div>
                    <div class="container-main-login-btn">
                        <button type="submit">Entrar</button>
                    </div>
                </form>
                <div class="container-main-login-forget">
                    <p>Esqueceu a senha? <a href="#">Recuperar Senha.</a></p>
                    <p>Não possui uma conta? <a href="cadastro.html">Cadastrar.</a></p>
                </div>
            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
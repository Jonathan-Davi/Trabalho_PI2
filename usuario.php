<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/usuario.css">

    <title>FitTrack Usuário</title>
</head>
<body>
    
    <main>

        <div class="container-main">
            <div class="main-foto">
                <img src="images/perfil-de-usuario.png" alt="Foto Perfil">
            </div>
            <div class="main-geral">
                <div class="main-arquivo">
                    <input type="file" name="" id="">
                </div>
                <div class="flex">
                    <div class="main-esquerda">
                        <div class="esquerda-infos">
                            <div class="infos-titulo">
                                <h3>Informações.</h3>
                            </div>
                            <div class="infos">
                                <label for="nome">Usuário: User123</label>
                                <label for="email">E-mail: user@hotmail.com</label>
                            </div>
                        </div>
                    </div>
                    <div class="main-direita">
                        <div class="infos-titulo">
                            <h3>Completar cadastro.</h3>
                        </div>
                        <div class="direita-complete">
                            <form>
                                <label for="peso">Peso</label>
                                <input type="text" name="peso" placeholder="Digite seu peso!">
                                <label for="altura">Altura</label>
                                <input type="text" name="altura" placeholder="Digite sua altura!">
                                <button type="submit">Concluir</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


</body>
</html>
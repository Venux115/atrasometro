<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Atrasometro</title>
    <!--ResetCSS-->
    <link rel="stylesheet" href="/css/resetCSS.css" />
    <!-- bootstrap4 -->
    <link
            rel="stylesheet"
            href="/bootstrap5/css/bootstrap.css"
    />

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<main class="main-content d-flex flex-column align-items-center justify-content-center">

    <div class="box fundo" id="tamanho">
        <div class="head ">
            <div class="d-flex flex-column align-items-center">
                <h1>Controle de Atrasos</h1>
                <img src="/assets/cedup.png" alt="logo" />
            </div>
        </div>

        <div class="body">
            <form action="/logar" method="post">
                <div class="form-group m-3">
                    <label for="usuario">Usuário</label>
                    <input
                            type="text"
                            name="usuario"
                            class="form-control"
                            placeholder="Digite seu e-mail"
                            autocomplete="off"
                            required
                    />
                </div>
                <div class="form-group m-3">
                    <label for="senha">Senha</label>
                    <input
                            type="password"
                            name="senha"
                            class="form-control"
                            placeholder="Senha"
                            autocomplete="off"
                            required
                    />
                </div>

                <div class="form-group m-3 mt-5 d-flex justify-content-center">
                    <button class="btn botao btn-block" type="submit">
                        Entrar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="row ">
        <div>
            <p class="letra">
                Não possui cadastro? Clique
                <a href="cadastro_usuario_externo.php"
                >aqui!</a
                >
            </p>
        </div>
    </div>
</main>
</body>
<script
        src="https://kit.fontawesome.com/cae6919cdb.js"
        crossorigin="anonymous"
></script>
<script
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"
></script>
<script
        src="bootstrap5/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"
></script>
</html>

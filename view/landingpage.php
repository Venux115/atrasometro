<?php required_once "inicio.html" ?>

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
                        <input type="text" name="usuario" class="form-control" placeholder="Digite seu e-mail" autocomplete="off" required />
                    </div>
                    <div class="form-group m-3">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required />
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
                    <a href="/cadastrar_usuario_externo">aqui!</a>
                </p>
            </div>
        </div>
    </main>
<?php required_once "fim.html" ?>
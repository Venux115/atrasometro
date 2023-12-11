<?php require_once "inicio.html"; ?>
<style>
    a.botao {
        background: #A88D1F;
    }

    a.letra {
        color: #FFFFFF;
    }
</style>

<div class="container" style="widith: 500px; margin-top: 30px;">
    <center>
        <h4 style="color: black;">Usuário cadastrado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="/cadastrar_usuario" role="button" class="btn botao letra btn-sm">Cadastrar novo usuário</a>
            <a href="/home" role="button" class="btn btn-success btn-sm">Voltar ao início</a>
        </center>
    </div>

</div>
<?php require_once "fim.html"; ?>
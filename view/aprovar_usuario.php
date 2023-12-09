<?php require_once "inicio.html";?>
<style>
    a.botao {
        background: #A88D1F;
    }

    a.letra {
        color: #FFFFFF;
    }
    
    body{
        color: black;
    }
</style>

<div class="container" style="widith: 500px; margin-top: 30px;">
    <center>
        <h4><?php
            if ($nivel == 1) {
                echo "Administrador";
            }
            if ($nivel == 2) {
                echo "Funcionário";
            }
            if ($nivel == 3) {
                echo "Conferente";
            }
            ?> aprovado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="/aprovar_usuario" role="button" class="btn botao letra btn-sm">Voltar para a lista</a>
        </center>
    </div>

</div>
<?php require_once "fim.html";?>
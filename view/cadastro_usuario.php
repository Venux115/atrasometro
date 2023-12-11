<?php require_once "inicio.html"; ?>
<style>
    body{
        color: black;
    }
    h4{
        color: black;
    }
    a.botao {
        background: #A88D1F;
    }

    a.letra {
        color: #FFFFFF;
    }
</style>


<div class="container" style="width:500px; margin-top:40px;">
    <center>
        <img src="assets/cedup2.png" alt="logo" width="150px" style="margin-bottom:10px; border-radius: 100px;">
        <h4>Cadastro de usuário</h4>
    </center>

    <form  method="post">
        <div class="form-group">
            <label>Nome do usuário</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome completo" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="mail" class="form-control" placeholder="Seu e-mail" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input id="txtSenha" type="password" name="senha" class="form-control" placeholder="Sua senha" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Confirmar senha</label>
            <input type="password" name="senha2" class="form-control" placeholder="Confirme sua senha" autocomplete="off" required oninput="validaSenha(this)">
            <small>Precisa ser igual a senha digitada acima.</small>
        </div>
        <div class="form-group">
            <label>Nível de acesso</label>
            <select name="nivel" class="form-control">
                <option value="1">Administrador</option>
                <option value="2">Funcionário</option>
                <option value="3">Conferente</option>
            </select>
        </div>
        <div style="text-align:right;">
            <a href="/home" role="button" class="btn botao letra btn-sm">Voltar</a>
            <button class=" btn btn-sm btn-success" type="submit" id="botao">Cadastrar</button>
        </div>
    </form>

    <footer class="text-center mt-4">
        <p>&copy; 2023 - Salvador e Irruan</p>
    </footer>

</div>
<script>
    function validaSenha(input) {
        if (input.value != document.getElementById('txtSenha').value) {
            input.setCustomValidity('Repita a senha corretamente');
        } else {
            input.setCustomValidity('');
        }
    }
</script>

<?php require_once "fim.html"; ?>
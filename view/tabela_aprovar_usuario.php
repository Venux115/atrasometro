<?php require_once "inicio.html";?>

        <style>
            a.botao {
                background: #A88D1F;
            }

            a.letra {
                color: #FFFFFF;
            }
        </style>

        <div class="container" style="margin-top: 40px">
            <center>
                <h3>Aprovar usuários</h3>
            </center>
            <br>
            <br>
            <center>
                <table id="table_id" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope=" col">Nome</th>
                            <th scope=" col">E-mail</th>
                            <th scope="col">
                                <center>Aprovar como</center>
                            </th>
                        </tr>
                    </thead>

                    <?php
                    

                    foreach($usuarios as $usuario){?>
                        <tr>
                            <td> <?= $usuario->getNome(); ?> </td>
                            <td> <?= $usuario->getEmail(); ?> </td>

                            <td>
                                <center>
                                    <a href=" ?id=<?= $usuario->getId(); ?>&nivel=1" role="button" class="btn btn-success btn-sm"><i class="fas fa-user-shield"></i>&nbsp;
                                        Administrador</a>

                                    <a href="?id=<?= $usuario->getId(); ?>&nivel=2" role="button" class="btn btn-warning btn-sm"><i class="fas fa-user-alt"></i>&nbsp;
                                        Usuário</a>

                                    <a href="?id=<?= $usuario->getId(); ?>&nivel=3" role="button" class="btn btn-primary btn-sm"><i class="fas fa-user-tag"></i>&nbsp;
                                        Conferente</a>

                                    <a href="/deletar_usuario?id=<?= $usuario->getId(); ?>" role="button" class="btn btn-danger btn-sm"><i class="fas fa-ban"></i>&nbsp;
                                        Inadimitir</a>
                                </center>
                            </td>
                        <?php } ?>

                        </tr>
                </table>
            </center>

            <div style="text-align: right; margin-top:20px;">
                <a href="cadastro_usuario.php" role="button" class="btn btn-success  btn-sm">Cadastrar novo usuário</a>
                <a href="/home" role="button" class="btn botao letra btn-sm">Voltar para o menu</a>

            </div>

        </div>

        <script>
            $(document).ready(function() {
                $('#table_id').DataTable({
                    "language": {
                        "lengthMenu": "Mostrando _MENU_ registros por página",
                        "zeroRecords": "Nada encontrado",
                        "info": "Mostrando _PAGE_ de _PAGES_",
                        "infoEmpty": "Nenhum registro encontrado",
                        "infoFiltered": "(Filtrado de _MAX_ registros totais)"
                    }
                });
            });
        </script>
        
<?php require_once "fim.html";?>
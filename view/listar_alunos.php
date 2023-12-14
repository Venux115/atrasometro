<?php require_once "inicio.html"; ?>
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
            <h3>Lista de alunos</h3>
        </center>
        <br>
        <br>
        <table class="table" id="table_id">
            <thead>
                <tr>
                    <th scope="col">Nome do aluno</th>
                    <th scope="col" style="min-width: 120px;">Nº da matrícula</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Turma</th>
                    <th scope="col" style="min-width: 148px;">
                        <center>Ação</center>
                    </th>
                </tr>
            </thead>


            <?php


            foreach ($alunos as $aluno) {

                $id_aluno = $aluno->getId();
                $matricula = $aluno->getMatricula();
                $nomealuno = $aluno->getNome();
                $cursoaluno = $aluno->getCurso();
                $turmaaluno = $aluno->getTurma();


            ?>
                <tr>
                    <td style="vertical-align: inherit;"> <?= $nomealuno ?> </td>
                    <td style="vertical-align: inherit;"> <?=  $matricula ?> </td>
                    <td style="vertical-align: inherit;"> <?=  $cursoaluno ?> </td>
                    <td style="vertical-align: inherit;"> <?=  $turmaaluno ?> </td>
                    <td style="vertical-align: inherit;">
                        <center>


                            <?php if (($nivel == 1) || ($nivel == 2)) { ?>

                                <a href="editar_aluno.php?id=<?= $id_aluno ?>" role="button" class="btn btn-dark btn-sm"><i class="far fa-edit"></i>&nbsp; Editar</a>

                            <?php } ?>
                            <?php if (($nivel == 1)) { ?>
                                <a href="#" role="button" class="btn btn-danger btn-sm" onclick="confirmarExclusao(<?= $id_aluno; ?>)">
                                    <i class="far fa-trash-alt"></i>&nbsp; Excluir
                                </a>
                            <?php } ?>
                        </center>
                    </td>

                    <script>
                        function confirmarExclusao(id) {
                            if (confirm("Tem certeza que deseja excluir este registro?")) {
                                window.location.href = 'deletar_aluno.php?id=' + id;
                            }
                        }
                    </script>

                <?php } ?>

                </tr>
        </table>

        <div style="text-align: right; margin-top:20px;">
            <!--
            <a href="adicionar_aluno.php" role="button" class="btn btn-success btn-sm">Cadastrar aluno</a>
            -->

            <a href="/home" role="button" class="btn botao letra btn-sm">Voltar ao menu</a>

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
                    "infoFiltered": "(Filtrado de _MAX_ registros totais)",
                    "search": "Pesquisar:"
                }
            });
        });
    </script>

<?php require_once "fim.html"  ?>
<?php 

include 'conexao.php';

$curso = $_POST['catcurso'];

$sql = "INSERT INTO `cursos`(`curso`) VALUES ('$curso')";
$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <style>
     a.botao{
                background:#A88D1F ;
            }
            a.letra{
                color: #FFFFFF;
            }
    </style>
    
<div class="container" style="widith: 500px; margin-top: 30px;">
    <center>
        <h4>Curso adicionado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="menu.php" role="button" class="btn botao letra btn-sm">Voltar ao menu</a>
        </center>
    </div>

</div>
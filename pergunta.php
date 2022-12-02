<?php 

$titulo = "Faça sua pergunta!";
$subtitulo = "Faça sua pergunta!";
$migalhaPao = "Criador de perguntas";
include "conexao.php" ;
include "cabecalho.php" ;

if( isset ($_POST ) && !empty($_POST) ){
    $pergunta = $_POST["pergunta"];
    $a = $_POST["A"];
    $b = $_POST["B"];
    $c = $_POST["C"];
    $d = $_POST["D"];
    $e = $_POST["E"];
    $correta = $_POST["correta"];

    $query = "insert into questoes (pergunta,a,b,c,d,e,correta) ";
    $query = $query." values('$pergunta','$a','$b','$c','$d','$e','$correta')";
    $resultado = mysqli_query($conexao, $query);
}
?>

<form action="./pergunta.php" method="post">
    <div class="offset">
        <div class="card-header">
            <h1>Pergunta: <input class="m-7" name="pergunta"></input></h1>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <br><br>
                <label>A)</label>
                <input type="radio" name="correta" value="A" />
                <input type="text" name="A" />
                <br><br>
                <label>B)</label>
                <input type="radio" name="correta" value="B" />
                <input type="text" name="B" />
                <br><br>
                <label>C)</label>
                <input type="radio" name="correta" value="C" />
                <input type="text" name="C" />
                <br><br>
                <label>D)</label>
                <input type="radio" name="correta" value="D" />
                <input type="text" name="D" />
                <br><br>
                <label>E)</label>
                <input type="radio" name="correta" value="E" />
                <input type="text" name="E" />
                <br><br>
            </blockquote>
           </div>
    </div>
        
        <button class="btn btn-success" type="submit">Salvar Pergunta</button>

</form>

<?php
include "rodape.php";
?>
<?php
$titulo = "Correção Questionário";
$subtitulo = "Respostas:";
$migalhaPao = "Página Inicial > Respostas";
include "conexao.php" ;
include "cabecalho.php" ;
?>

<h2>Respostas</h2>

<?php
$pontuacao = 0;
if(isset($_POST) && !empty($_POST)){
    $valoresArray = array_keys($_POST);
    for($i=0; $i<count($valoresArray);$i++){

        $alternativaSelecionada = lcfirst($_POST[$valoresArray[$i]]); //alternativa que o usuário selecionou
        quebraLinha();

        $query = "select * from questoes where id =".$valoresArray[$i];
        $resultado = mysqli_query($conexao, $query);
        
        while($linha = mysqli_fetch_array($resultado)){
            $alternativaCorreta = lcfirst($linha["correta"]);
            ?>
            <div class="offset-3 col-7">
                <div class="card m-3">
                    <div class="card-header text-center">
                        <strong>
                            <?php echo $linha["pergunta"] ?>
                        </strong>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <?php
                                if(
                                $alternativaCorreta == $alternativaSelecionada){
                            ?>
                            <div class="alert alert-success">
                                <p>Voce Acertou!!!</p>
                                <p>Sua Resposta: <?php echo $_POST[$valoresArray[$i]].") ". $linha[$alternativaSelecionada]?></p>
                                <p>Resposta Certa: <?php echo $linha["correta"].") ". $linha[$alternativaCorreta]?></p>
                            </div>
                            <?php
                                $pontuacao++;
                                }else{
                                ?>
                                    <div class="alert alert-danger">
                                        <p>Voce Errou!</p>
                                        <p>Sua Resposta: <?php echo $_POST[$valoresArray[$i]].") ". $linha[$alternativaSelecionada]?></p>
                                        <p>Resposta Certa: <?php echo $linha["correta"].") ". $linha[$alternativaCorreta]?></p>
                                    </div>
                                    <?php
                                    }
                                    ?>
                        </blockquote>
                    </div>
                </div> 
            </div>
        <?php
        }
    }  
    
    if($pontuacao==1){
        ?>
        <div class="m-3 alert alert-danger">
            <h2 class="text-center">Sua Pontuação foi abaixo da média, ela foi de: <?php echo $pontuacao ?> ponto.</h2>
            <br/>
        </div>
        <?php
    }else if($pontuacao<5){
        ?>
        <div class="m-3 alert alert-danger">
            <h2 class="text-center">Sua Pontuação foi abaixo da média, ela foi de: <?php echo $pontuacao ?> pontos.</h2>
            <br/>
        </div>
        <?php
    }else{
        ?>
        <div class="m-3 alert alert-success">
            <h2 class="text-center">Sua Pontuação foi acima da média, ela foi de: <?php echo $pontuacao ?> pontos.</h2>
            <br/>
        </div>
        <?php
    }

}else{
    header("Location: ./index.php?mensagem=Voce Precisa Responder pelo menos uma pergunta!");
    exit();
}

include "rodape.php" ;

function quebraLinha(){
    ?>
    <br/>
    <?php
}
?>
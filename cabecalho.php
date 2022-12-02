<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $titulo; ?>
    </title>
    <link href="./bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="./index.php">Questionário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./pergunta.php">Criar Pergunta</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php echo $migalhaPao; ?>
<h1><?php echo $subtitulo; ?><h1>
<div class="container">
<br>
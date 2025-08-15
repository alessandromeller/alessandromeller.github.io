<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bedienfeld</title>
    <!-- <script language=javascript>
        senha = 'erika';
        senhadig = prompt("Digite a senha","")
        if (senha != senhadig){
        alert('Tu não és bem vindo aqui!');
        top.location.href='';
        }
    </script> -->
    <link rel="icon" type="image/x-icon" href="./images/favicon/favicon.jpg">
    <!-- abaixo o link para ícones do bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- abaixo o css do bootstrap -->
    <link rel="stylesheet" href="./css/boot.css">
    <!-- Abaixo a mais importante css, a minha -->
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/imagens.css">
</head>
<body>
<?php include './parts/header.php' ?>
<br><br> <h3 class="alinhar_centro">Imagens</h3>
    <div class="imagens_principal">
        <img class="imagem_inicio" src="./images/mesa.jpg" alt="mesa">
        <img class="imagem_inicio" src="./images/chair.jpg" alt="">
        <img class="imagem_inicio" src="./images/arvores.jpg" alt="">  
        <img class="imagem_inicio" src="./images/time.jpg" alt="">
        <img class="imagem_inicio" src="./images/hillfort.jpg" alt="">
        <img class="imagem_inicio" src="./images/painting_bridge.jpg" alt="">
        <img class="imagem_inicio" src="./images/the-way.jpg" alt="">
    </div>
</body>
</html>
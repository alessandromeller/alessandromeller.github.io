<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    <link rel="stylesheet" href="css/boot.css">
    <!-- Abaixo a mais importante css, a minha -->
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/princ.css">
  </head>

  <body>
    <?php include './parts/header.php' ?>

    <div class="aside_e_article">
      <?php include './parts/aside.php' ?>
      <?php include './parts/article.php' ?>
    </div>

    <?php include './parts/footer.php' ?>

    <!-- código para surgir e sumir itens -->
     <script type="text/javascript" src="./js/abrirfechar.js"></script>
    <!-- código para o abre e fecha dos itens -->
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/collapse.js"></script>
    <!-- Código Javascript para os ícones -->
    <script src="https://kit.fontawesome.com/e84834257c.js" crossorigin="anonymous"></script>
  </body>
</html>

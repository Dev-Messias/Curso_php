<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!--FONTE GOOGLE-->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!--MEU CSS-->
    <link rel="stylesheet" href="assets/css/estilo.css">

    <title>Curso PHP</title>
</head>
<body>
  <!--CABECALHO-->
  <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Indice dos Exercícios</h2>
  </header>
  <!-- CONTEUDO CORPO -->
  <main class="principal">
    <div class="conteudo">
        <nav class="modulos">
          <!-- Exercicio 01 -->
          <div class="modulo verde ">
            <h3>Módulo 01 </h3>
            <ul>
              <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
              <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
              <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
            </ul>
          </div>

        </nav>
    </div>
  </main>
  <!-- RODAPE -->
  <footer class="rodape">
    ALUNOS © <?= date('Y');  ?>
  </footer>  
</body>
</html>
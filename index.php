
<?php
 
 $base = $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor Caseiro</title>

    <base href="http://<?=$base?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">
        <img src="img/logo.png" style="width: 100px; " alt="Sabor Caseiro">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quem-somos">Quem Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produtos">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato">Contato</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<main class="container">
    <?php
        //incluir o arquivo do array
        include "array.php";

        $pagina = $_GET["param"] ?? "home";

        $param = explode ("/", $pagina);
        $pagina = $param[0];
        $id = $param[1] ?? NULL;

        //home -> pages/home.php
        $pagina = "pages/{$pagina}.php";

        //verificar se a página existe
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "pages/erro.php";
        }
    ?>
</main>

<footer class="bg-dark text-white p-3 mt-5">
    <p class="text-center">
        Sabor Caseiro - Todos os direitos reservados 
        
    </p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
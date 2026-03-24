<?php
include 'array.php';

$pagina = $_GET['param'] ?? 'home';

if (isset($_GET['param'])) {
    $param  = explode('/', $_GET['param']);
    $pagina = $param[0] ?? 'home';
}

$arquivo = "pages/{$pagina}.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $titulos = [
    'home'      => 'Clínica Laura Studio — Design de Sobrancelhas',
    'resultados'=> 'Resultados — Clínica Laura Studio',
    'contato'   => 'Agendar Horário — Clínica Laura Studio',
  ];
  $titulo = $titulos[$pagina] ?? 'Clínica Laura Studio';
  ?>
  <title><?= $titulo ?></title>
  <meta name="description" content="Clínica Laura Studio — Design de sobrancelhas artesanal em Campo Mourão, PR.">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="pages/style.css">
  <script id="pixel-chaty" async src="https://cdn.chaty.app/pixel.js?id=b4cJrVjh"></script>
</head>
<body class="page-body">

<?php include 'pages/nav.php'; ?>

<?php
if (file_exists($arquivo)) include $arquivo;
else include 'pages/erro.php';
?>

<?php include 'pages/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
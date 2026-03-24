<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados — Clinica Laura Studio</title>
  <meta name="description" content="Veja os resultados do design de sobrancelhas da Clinica Laura Studio.">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <script id="pixel-chaty" async src="https://cdn.chaty.app/pixel.js?id=b4cJrVjh"></script>
</head>
<body class="page-body resultados-page">

<?php include 'nav.php'; ?>

<!-- PAGE HERO -->
<div class="page-hero">
  <span class="eyebrow">Portfólio</span>
  <h1>Nossos <em>Resultados</em></h1>
</div>

<!-- GALERIA MASONRY -->
<section class="gallery-section">
  <div class="gallery-grid reveal">
    <?php
    foreach ($fotoresultado as $id => $valor) {
      echo "<a href='{$valor['foto']}' target='_blank'>
              <img src='{$valor['foto']}' alt='Sobrancelha {$id}' loading='lazy'>
            </a>";
    }
    ?>
  </div>
</section>

<!-- CAROUSEL -->
<section class="carousel-section">
  <h2 class="reveal">Antes e <em>Depois</em></h2>
  <div class="carousel-wrap reveal reveal-delay-1">
    <div id="carouselResultados" class="carousel slide custom-carousel" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselResultados" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselResultados" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselResultados" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#carouselResultados" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#carouselResultados" data-bs-slide-to="4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/imgresultados/um.jpg" alt="Resultado 1">
        </div>
        <div class="carousel-item">
          <img src="../img/imgresultados/cinco.jpg" alt="Resultado 2">
        </div>
        <div class="carousel-item">
          <img src="../img/imgresultados/tres.jpg" alt="Resultado 3">
        </div>
        <div class="carousel-item">
          <img src="../img/imgresultados/dois.jpg" alt="Resultado 4">
        </div>
        <div class="carousel-item">
          <img src="../img/imgresultados/quat.jpg" alt="Resultado 5">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselResultados" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselResultados" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </div>
</section>

<!-- AVALIAÇÕES -->
<section class="avaliacoes-section">
  <h2 class="reveal">O que dizem <em>nossas clientes</em></h2>
  <div class="avals-grid">

    <div class="aval-card reveal">
      <div class="aval-top">
        <img src="../img/pp4.jpg" alt="Eloá F. Martins">
        <div>
          <div class="aval-name">Eloá F. Martins</div>
          <div class="aval-stars">★★★★★</div>
        </div>
      </div>
      <p class="aval-text">Trabalho maravilhoso, a Laura é um amor 😍</p>
      <div class="aval-date">14 de junho de 2025</div>
    </div>

    <div class="aval-card reveal reveal-delay-1">
      <div class="aval-top">
        <img src="../img/pp5t.jpg" alt="Giovana N. Torres">
        <div>
          <div class="aval-name">Giovana N. Torres</div>
          <div class="aval-stars">★★★★★</div>
        </div>
      </div>
      <p class="aval-text">Amei! A profissional entende exatamente o que você quer e faz tudo com muito capricho. Indico demais!</p>
      <div class="aval-date">5 de março de 2025</div>
    </div>

    <div class="aval-card reveal reveal-delay-2">
      <div class="aval-top">
        <img src="../img/pp1r.jpg" alt="Anna Clara G.">
        <div>
          <div class="aval-name">Anna Clara G.</div>
          <div class="aval-stars">★★★★★</div>
        </div>
      </div>
      <p class="aval-text">Profissional detalhista e cuidadosa. Saí me sentindo linda e renovada ❤️</p>
      <div class="aval-date">26 de abril de 2025</div>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="agenda-cta">
  <p class="reveal">Quer um resultado assim?</p>
  <a href="contato" class="btn-primary-custom reveal reveal-delay-1">
    <i class="fa-regular fa-calendar"></i> Agendar horário
  </a>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<?php include 'footer.php'; ?>
</body>
</html>
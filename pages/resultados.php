<?php
$fotoresultado       = $fotoresultado       ?? [];
$carrosselResultados = $carrosselResultados ?? [];
?>

<!-- PAGE HERO -->
<div class="page-hero">
  <span class="eyebrow">Portfólio</span>
  <h1>Nossos <em>Resultados</em></h1>
</div>

<!-- GALERIA ANTES E DEPOIS -->
<section class="gallery-section">
  <div class="gallery-grid reveal">
    <?php foreach ($fotoresultado as $valor): ?>
      <a href="<?= $valor['foto'] ?>" target="_blank">
        <img src="<?= $valor['foto'] ?>" alt="<?= $valor['alt'] ?>" loading="lazy">
      </a>
    <?php endforeach; ?>
  </div>
</section>

<!-- CAROUSEL -->
<section class="carousel-section">
  <h2 class="reveal">Antes e <em>Depois</em></h2>
  <div class="carousel-wrap reveal reveal-delay-1">
    <div id="carouselResultados" class="carousel slide custom-carousel" data-bs-ride="carousel">

      <div class="carousel-indicators">
        <?php foreach ($carrosselResultados as $i => $item): ?>
          <button type="button"
            data-bs-target="#carouselResultados"
            data-bs-slide-to="<?= $i ?>"
            <?= $i === 0 ? 'class="active" aria-current="true"' : '' ?>
          ></button>
        <?php endforeach; ?>
      </div>

      <div class="carousel-inner">
        <?php foreach ($carrosselResultados as $i => $item): ?>
          <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
            <img src="<?= $item['foto'] ?>" alt="<?= $item['alt'] ?>">
          </div>
        <?php endforeach; ?>
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
        <img src="img/pfp-avaliacao1.jpg" alt="Eloá F. Martins">
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
        <img src="img/pfp-avaliacao2.jpg" alt="Giovana N. Torres">
        <div>
          <div class="aval-name">Giovana N. Torres</div>
          <div class="aval-stars">★★★★★</div>
        </div>
      </div>
      <p class="aval-text">Amei! A profissional entende exatamente o que você quer e faz tudo com muito capricho. Indico demais!</p>
      <div class="aval-date">5 de março de 2026</div>
    </div>

    <div class="aval-card reveal reveal-delay-2">
      <div class="aval-top">
        <img src="img/pfp-avaliacao3.jpg" alt="Anna Clara G.">
        <div>
          <div class="aval-name">Anna Clara G.</div>
          <div class="aval-stars">★★★★★</div>
        </div>
      </div>
      <p class="aval-text">Profissional detalhista e cuidadosa. Saí me sentindo linda e renovada ❤️</p>
      <div class="aval-date">26 de abril de 2026</div>
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

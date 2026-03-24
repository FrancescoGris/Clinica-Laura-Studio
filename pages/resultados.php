<!-- PAGE HERO -->
<div class="page-hero">
  <span class="eyebrow">Portfólio</span>
  <h1>Nossos <em>Resultados</em></h1>
</div>

<!-- GALERIA MASONRY -->
<section class="gallery-section">
  <div class="gallery-grid reveal">
    <?php foreach ($fotoresultado as $id => $valor): ?>
      <a href="<?= $valor['foto'] ?>" target="_blank">
        <img src="<?= $valor['foto'] ?>" alt="Sobrancelha <?= $id ?>" loading="lazy">
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
        <button type="button" data-bs-target="#carouselResultados" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselResultados" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselResultados" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#carouselResultados" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#carouselResultados" data-bs-slide-to="4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active"><img src="img/imgresultados/um.jpg"   alt="Resultado 1"></div>
        <div class="carousel-item"><img src="img/imgresultados/cinco.jpg" alt="Resultado 2"></div>
        <div class="carousel-item"><img src="img/imgresultados/tres.jpg"  alt="Resultado 3"></div>
        <div class="carousel-item"><img src="img/imgresultados/dois.jpg"  alt="Resultado 4"></div>
        <div class="carousel-item"><img src="img/imgresultados/quat.jpg"  alt="Resultado 5"></div>
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
        <img src="img/pp4.jpg" alt="Eloá F. Martins">
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
        <img src="img/pp5t.jpg" alt="Giovana N. Torres">
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
        <img src="img/pp1r.jpg" alt="Anna Clara G.">
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
  <a href="/Clinica-Laura-Studio/contato" class="btn-primary-custom reveal reveal-delay-1">
    <i class="fa-regular fa-calendar"></i> Agendar horário
  </a>
</section>
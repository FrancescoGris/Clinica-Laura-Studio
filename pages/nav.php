<nav class="site-nav" id="siteNav">
  <a href="/Clinica-Laura-Studio/home" class="nav-brand">
    <img src="img/loh.png" alt="Clínica Laura Studio">
  </a>

  <button class="nav-toggle" id="navToggle" aria-label="Abrir menu">
    <span></span><span></span><span></span>
  </button>

  <ul class="nav-links" id="navLinks">
    <li><a href="/Clinica-Laura-Studio/home">Home</a></li>
    <li><a href="/Clinica-Laura-Studio/resultados">Resultados</a></li>
    <li><a href="/Clinica-Laura-Studio/contato" class="nav-cta">Agendar</a></li>
  </ul>
</nav>

<script>
  // Scroll shadow
  const nav = document.getElementById('siteNav');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 20);
  });

  // Active link highlight
  const path = window.location.pathname.split('/').pop();
  document.querySelectorAll('.nav-links a:not(.nav-cta)').forEach(a => {
    const href = a.getAttribute('href').split('/').pop();
    if (href === path) a.classList.add('active');
  });

  // Hamburger toggle
  const toggle = document.getElementById('navToggle');
  const links  = document.getElementById('navLinks');
  toggle.addEventListener('click', () => {
    links.classList.toggle('open');
    const spans = toggle.querySelectorAll('span');
    if (links.classList.contains('open')) {
      spans[0].style.transform = 'rotate(45deg) translate(4px, 5px)';
      spans[1].style.opacity   = '0';
      spans[2].style.transform = 'rotate(-45deg) translate(4px, -5px)';
    } else {
      spans.forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
    }
  });

  // Scroll reveal
  document.addEventListener('DOMContentLoaded', () => {
    const reveals  = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); } });
    }, { threshold: 0.12 });
    reveals.forEach(r => observer.observe(r));
  });
</script>
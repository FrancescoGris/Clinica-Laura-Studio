<style>
  @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=Jost:wght@300;400;500&display=swap');

  .erro-page {
    min-height: calc(100vh - 72px);
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--cream, #fdf8ff);
    padding: 48px 24px;
    text-align: center;
  }

  .erro-inner {
    max-width: 560px;
  }

  .erro-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(7rem, 20vw, 13rem);
    font-weight: 300;
    line-height: 1;
    color: transparent;
    -webkit-text-stroke: 1.5px #6b0f82;
    letter-spacing: -0.02em;
    margin-bottom: 8px;
    animation: fadeUp 0.9s ease 0.1s both;
  }

  .erro-divider {
    width: 48px;
    height: 1px;
    background: #c9a86c;
    margin: 0 auto 32px;
    animation: fadeUp 0.9s ease 0.25s both;
  }

  .erro-titulo {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(1.6rem, 4vw, 2.4rem);
    font-weight: 300;
    color: #1a0a1e;
    margin-bottom: 16px;
    animation: fadeUp 0.9s ease 0.35s both;
  }
  .erro-titulo em { font-style: italic; color: #6b0f82; }

  .erro-desc {
    font-family: 'Jost', sans-serif;
    font-size: 1rem;
    font-weight: 300;
    line-height: 1.8;
    color: #4a2d52;
    margin-bottom: 48px;
    animation: fadeUp 0.9s ease 0.45s both;
  }

  .erro-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.05rem;
    font-weight: 500;
    letter-spacing: 0.04em;
    color: #ffffff;
    background: #6b0f82;
    padding: 16px 40px;
    border-radius: 50px;
    text-decoration: none;
    border: 2px solid #6b0f82;
    transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
    animation: fadeUp 0.9s ease 0.55s both;
  }
  .erro-btn:hover {
    background: #9b2ab8;
    border-color: #9b2ab8;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 12px 40px rgba(107,15,130,0.3);
  }

  .erro-ornamento {
    margin-top: 56px;
    font-family: 'Cormorant Garamond', serif;
    font-size: 0.82rem;
    font-style: italic;
    color: #9b2ab8;
    opacity: 0.6;
    animation: fadeUp 0.9s ease 0.65s both;
  }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }
</style>

<div class="erro-page">
  <div class="erro-inner">
    <div class="erro-num">404</div>
    <div class="erro-divider"></div>
    <h1 class="erro-titulo">Página <em>não encontrada</em></h1>
    <p class="erro-desc">
      Parece que essa página não existe ou foi movida.<br>
      Mas seu próximo agendamento pode existir — que tal voltar ao início?
    </p>
    <a href="home" class="erro-btn">
      ← Voltar ao início
    </a>
    <div class="erro-ornamento">Clínica Laura Studio — Design de Sobrancelhas</div>
  </div>
</div>
<div class="contato-inner">
  <span class="eyebrow reveal">Agendamento</span>
  <h   class="reveal">Marque seu <em>horário</em></h1>
  <p class="reveal reveal-delay-1">
    Preencha o formulário abaixo e você será redirecionada ao WhatsApp com a mensagem já preenchida. Será um prazer te atender!
  </p>

  <form id="agendamentoForm" novalidate>
    <div class="form-row reveal reveal-delay-1">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" placeholder="Seu nome" required>
      </div>
      <div class="form-group">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" id="sobrenome" placeholder="Seu sobrenome" required>
      </div>
    </div>

    <div class="form-row reveal reveal-delay-2">
      <div class="form-group">
        <label for="telefone">Telefone (WhatsApp)</label>
        <input type="tel" id="telefone" placeholder="(44) 99999-9999" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail (opcional)</label>
        <input type="email" id="email" placeholder="nome@exemplo.com">
      </div>
    </div>

    <div class="form-group reveal reveal-delay-2">
      <label>Serviço de interesse</label>
      <div class="form-servico">
        <label class="servico-option">
          <input type="radio" name="servico" value="Design de sobrancelhas" checked> Design de sobrancelhas
        </label>
        <label class="servico-option">
          <input type="radio" name="servico" value="Henna de sobrancelhas"> Henna de sobrancelhas
        </label>
        <label class="servico-option">
          <input type="radio" name="servico" value="Micropigmentação"> Micropigmentação
        </label>
        <label class="servico-option">
          <input type="radio" name="servico" value="Outro / Consulta"> Outro / Consulta
        </label>
      </div>
    </div>

    <div class="form-group reveal reveal-delay-3">
      <label for="mensagem">Mensagem (opcional)</label>
      <textarea id="mensagem" placeholder="Alguma dúvida ou preferência de horário?"></textarea>
    </div>

    <label class="form-check-custom reveal reveal-delay-3">
      <input type="checkbox" id="confirmar" required>
      <span>Confirmo que as informações estão corretas e concordo em ser contatada via WhatsApp.</span>
    </label>

    <div class="form-submit-wrap reveal reveal-delay-3">
      <button type="submit" class="btn-primary-custom">
        <i class="fa-brands fa-whatsapp"></i> Enviar pelo WhatsApp
      </button>
      <span class="form-note">Você será redirecionada ao WhatsApp</span>
    </div>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
  $(document).ready(function() { $('#telefone').mask('(00) 00000-0000'); });

  document.getElementById('agendamentoForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const nome      = document.getElementById('nome').value.trim();
    const sobrenome = document.getElementById('sobrenome').value.trim();
    const telefone  = document.getElementById('telefone').value.trim();
    const email     = document.getElementById('email').value.trim();
    const servico   = document.querySelector('input[name="servico"]:checked').value;
    const mensagem  = document.getElementById('mensagem').value.trim();
    const confirmar = document.getElementById('confirmar').checked;

    if (!nome || !sobrenome || !telefone || !confirmar) {
      alert('Por favor, preencha nome, sobrenome, telefone e confirme as informações.');
      return;
    }

    let texto = `Olá, Laura! Gostaria de agendar um horário. 🌸\n\n`;
    texto += `*Nome:* ${nome} ${sobrenome}\n`;
    texto += `*Telefone:* ${telefone}\n`;
    if (email)    texto += `*E-mail:* ${email}\n`;
    texto += `*Serviço:* ${servico}\n`;
    if (mensagem) texto += `*Mensagem:* ${mensagem}\n`;

    window.open(`https://wa.me/5544999514785?text=${encodeURIComponent(texto)}`, '_blank');
  });
</script>
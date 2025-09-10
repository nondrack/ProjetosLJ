<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('loginForm');
  const usuario = document.getElementById('usuario');
  const senha = document.getElementById('senha');
  const mensagem = document.getElementById('mensagem');

  form.addEventListener('submit', function (e) {
    e.preventDefault(); // Impede o envio do formulário

    // Limpa mensagens anteriores
    mensagem.textContent = '';
    mensagem.className = 'text-center mt-2';

    const usuarioValido = 'lucas';
    const senhaValida = '123';

    if (usuario.value.trim() === '' || senha.value.trim() === '') {
      mensagem.textContent = 'Por favor, preencha todos os campos.';
      mensagem.classList.add('text-danger');
      return;
    }

    if (usuario.value === usuarioValido && senha.value === senhaValida) {
      mensagem.textContent = '✅ Login realizado com sucesso!';
      mensagem.classList.remove('text-danger');
      mensagem.classList.add('text-success');
      

      // Redireciona para a home após 1 segundo
      setTimeout(() => {
        window.location.href = './js/index.php'; // Redireciona para a página inicial
      }, 1000);
    } else {
      mensagem.textContent = '❌ Usuário ou senha incorretos.';
      mensagem.classList.add('text-danger');
    }
  });
});



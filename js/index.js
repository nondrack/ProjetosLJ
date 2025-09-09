// ===================== UTILITÁRIOS =====================
function mostrarMensagem(elemento, texto, tipo) {
  elemento.textContent = texto;
  elemento.className = tipo === 'sucesso' ? 'text-success' : 'text-danger';
}

// ===================== LOGIN =====================
const loginForm = document.getElementById('loginForm');
if (loginForm) {
  const mensagemLogin = document.getElementById('mensagem');

  loginForm.addEventListener('submit', e => {
    e.preventDefault();
    const usuario = document.getElementById('usuario').value;
    const senha = document.getElementById('senha').value;

    const usuarioSalvo = localStorage.getItem('usuario');
    const senhaSalva = localStorage.getItem('senha');

    if (usuario === usuarioSalvo && senha === senhaSalva) {
      mostrarMensagem(mensagemLogin, "✅ Login bem-sucedido! Redirecionando...", 'sucesso');
      setTimeout(() => window.location.href = "index.html", 1500);
    } else {
      mostrarMensagem(mensagemLogin, "❌ Usuário ou senha incorretos!", 'erro');
    }
  });
}

// ===================== CADASTRO =====================
const cadastroForm = document.getElementById('cadastroForm');
if (cadastroForm) {
  const mensagemCadastro = document.getElementById('mensagem');

  cadastroForm.addEventListener('submit', e => {
    e.preventDefault();
    const usuario = document.getElementById('usuario').value;
    const senha = document.getElementById('senha').value;
    const confirmar = document.getElementById('confirmar').value;

    if (senha !== confirmar) {
      mostrarMensagem(mensagemCadastro, "⚠️ As senhas não coincidem!", 'erro');
      return;
    }

    localStorage.setItem('usuario', usuario);
    localStorage.setItem('senha', senha);

    mostrarMensagem(mensagemCadastro, "✅ Conta criada com sucesso! Redirecionando...", 'sucesso');
    setTimeout(() => window.location.href = "login.html", 1500);
  });
}

// ===================== HISTÓRICO =====================
const tabela = document.getElementById('tabelaNotas');
const relatorioGeral = document.getElementById('relatorioGeral');

if (tabela && relatorioGeral) {
  const notas = JSON.parse(localStorage.getItem('notas')) || [];
  let totalGastos = 0;

  notas.forEach((nota, index) => {
    totalGastos += parseFloat(nota.valor);

    const linha = document.createElement('tr');
    linha.innerHTML = `
      <td>${index + 1}</td>
      <td>${nota.descricao}</td>
      <td>${parseFloat(nota.valor).toFixed(2)}</td>
      <td>${nota.data}</td>
    `;
    tabela.appendChild(linha);
  });

  relatorioGeral.innerHTML = `
    <h5>Total de Notas: ${notas.length}</h5>
    <h5>Total de Gastos: R$ ${totalGastos.toFixed(2)}</h5>
  `;
}

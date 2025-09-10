<?php
session_start();

$mensagem = '';

// Processa o login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $usuario = trim($usuario);
    $senha = trim($senha);

    if (empty($usuario) || empty($senha)) {
        $mensagem = 'Por favor, preencha todos os campos.';
    } elseif ($usuario === 'lucas' && $senha === '123') {
        // Login correto - define a sessão
        $_SESSION['usuario'] = $usuario;

        // Redireciona para a página inicial
        header('Location: index.php');
        exit;
    } else {
        $mensagem = 'Usuário ou senha incorretos.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Sistema de Notas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./nav/footer/cabeçarios.css" />
</head>
<body>

<!-- Navbar -->
<?php include './nav/footer/navbar.php'; ?>
<!-- Fim da navbar -->

<div class="d-flex align-items-center justify-content-center vh-100">
  <div class="card shadow-lg p-4" style="max-width:400px; width:100%;">
    <h3 class="text-center mb-3">🔐 Acesso ao Sistema</h3>

    <form method="POST" action="">
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuário</label>
        <input type="text" name="usuario" id="usuario" class="form-control" required />
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" required />
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>

    <?php if (!empty($mensagem)): ?>
      <p class="text-center mt-3 text-danger"><?= htmlspecialchars($mensagem) ?></p>
    <?php endif; ?>

    <p class="text-center mt-3">Não tem conta? <a href="cadastro.php">Cadastrar</a></p>
  </div>
</div>

</body>
</html>

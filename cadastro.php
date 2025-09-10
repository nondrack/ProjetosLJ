<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - Sistema de Notas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="index.js">
    <link rel="stylesheet" href="./nav/footer/cabeçarios.css">
</head>
<body>

<!-- Navbar -->
<?php
  include './nav\footer/navbar.php';
  include './js/script.js'
?>
<!-- Fim do navbar-->

<div class="d-flex align-items-center justify-content-center vh-100">
  <div class="card shadow-lg p-4" style="max-width:400px; width:100%;">
    <h3 class="text-center mb-3">📝 Criar Conta</h3>
    <form id="cadastroForm">
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuário</label>
        <input type="text" id="usuario" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" id="senha" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="confirmar" class="form-label">Confirmar Senha</label>
        <input type="password" id="confirmar" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success w-100">Cadastrar</button>
      <a href="login.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
      <p id="mensagem" class="text-center mt-2"></p>
    </form>
  </div>
</div>

<script>

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

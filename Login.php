<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Sistema de Notas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="index.js">
</head>
<body>

<!-- Navbar -->

<?php
  include './nav\footer/navbar.php';
?>


<!-- Fim do navbar-->

<div class="d-flex align-items-center justify-content-center vh-100">
  <div class="card shadow-lg p-4" style="max-width:400px; width:100%;">
    <h3 class="text-center mb-3">🔐 Acesso ao Sistema</h3>
    <form id="loginForm">
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuário</label>
        <input type="text" id="usuario" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" id="senha" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <p class="text-center mt-3">Não tem conta? <a href="cadastro.html">Cadastrar</a></p>
    <p class="text-center mt-2" id="mensagem"></p>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




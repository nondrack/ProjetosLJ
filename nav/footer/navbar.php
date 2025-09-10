<?php
// Inicia a sessão se ainda não tiver sido iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="cabeçarios.css"> <!-- Seu CSS personalizado -->
</head>
<body>
  <nav class="navbar-custom">
    <div class="container">
      <a class="navbar-brand-custom" href="index.php">Notas Super</a>
      <button class="navbar-toggler-custom" id="menuToggle">☰</button>
      <div class="navbar-links" id="navbarLinks">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="registro.php">NotasFiscais</a></li>
          <li><a href="historico.php">Historico De Notas</a></li>

          <?php if (!empty($_SESSION['usuario'])): ?>
            <li><a href="#">👤 <?= htmlspecialchars($_SESSION['usuario']) ?></a></li>
            <li><a href="logout.php">Sair</a></li>
          <?php else: ?>
            <li><a href="login.php">Login</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>

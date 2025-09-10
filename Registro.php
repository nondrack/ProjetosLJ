<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Notas Fiscais</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./nav/footer/cabeçarios.css">
</head>
<body class="bg-light">

<?php
  include './nav\footer/navbar.php';

?>

  <div class="container py-5">
  <h2 class="mb-4 text-center">📝 Registrar Nota Fiscal</h2>

  <form id="formNota">
    <div class="mb-3">
      <label for="chave" class="form-label">Chave da Nota Fiscal (44 dígitos)</label>
      <input type="text" id="chave" class="form-control" maxlength="44" required>
    </div>
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </form>

  <div id="resultado" class="mt-4"></div>
</div>


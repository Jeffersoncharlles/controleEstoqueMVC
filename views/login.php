<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Sistema-Estoque</title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/Bootstrapp/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/login.css">
</head>
<body>
<div class="container">
      <form method="POST">
        <div class="form-group">
          <label>User Number</label>
          <input type="text" class="form-control" id="usernumber" name="number">
        </div>
        <div class="form-group">
          <label >Password</label>
          <input type="password" class="form-control" id="userpass" name="password">
        </div>
        <button type="submit" class="btn btn-primary" value="Entrar">Entrar</button>
      </form><br>
          
      <?php if (!empty($msg)): ?>
          <div class="alert alert-danger" role="alert">
              <?=$msg; ?>
          </div>
      <?php endif; ?>
</div>

<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/Bootstrap/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/Bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/login.js"></script>
</body>
</html>
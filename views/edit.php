<h1>Editar Produto</h1>
<?php if(!empty($warning)): ?>
    <div class="alert alert-warning" role="alert">
        <?= $warning;?>
    </div>
    <br><br>
<?php endif; ?>
<form method="POST" class="form">
    Codigo de Barras:<br>
    <input type="text" name="cod" required value="<?= $info['cod']; ?>"><br><br>

    Nome do Produto:<br>
    <input type="text" name="name" required value="<?= $info['name']; ?>"><br><br>

    Preco do Produto:<br>
    <input type="text" name="price" required value="<?= number_format($info['price'], 2, ',','.'); ?>"><br><br>

    Quantidade:<br>
    <input type="text" name="quantity" required value="<?= number_format($info['quantity'], 2, ',','.'); ?>"><br><br>

    Qtd. Minima:<br>
    <input type="text" name="min_quantity" required value="<?= number_format($info['min_quantity'], 2, ',','.'); ?>"><br><br>

    <input type="submit" value="Salvar" class="btn btn-success">
</form>

<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/mask.js"></script>
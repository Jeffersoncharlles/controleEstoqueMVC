<h1>Adicionar Produto</h1>
<?php if(!empty($warning)): ?>
    <div class="alert alert-warning" role="alert">
        <?= $warning;?>
    </div>
    <br><br>
<?php endif; ?>
<form method="POST">
    Codigo de Barras:<br>
    <input type="text" name="cod" required placeholder="Codigo de Barras"><br><br>

    Nome do Produto:<br>
    <input type="text" name="name" required placeholder="Nome do Produto"><br><br>

    Preco do Produto:<br>
    <input type="text" name="price" required placeholder="Preco do Produto"><br><br>

    Quantidade:<br>
    <input type="text" name="quantity" required placeholder="Quantidade"><br><br>

    Qtd. Minima:<br>
    <input type="text" name="min_quantity" required placeholder="Qtd. Minima"><br><br>

    <input type="submit" value="Adicionar Produto" class="btn btn-success">
</form>

<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/mask.js"></script>
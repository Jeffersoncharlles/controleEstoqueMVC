
    <fieldset>
        <form method="get">
            <input class="form-control" type="text" placeholder="Busca" value="<?= (!empty($_GET['busca']))?$_GET['busca']: ''; ?>"  name="busca" id="busca">
        </form>
    </fieldset>
    <br>
    <table class="table table-dark table-hover">
        <tr>
        <th>Cod.</th>
        <th>NOME</th>
        <th>Preco Unit.</th>
        <th>Qtd.</th>
        <th>Ações</th>
        </tr>
    <?php  foreach($list as $item): ?>
        <tr>
            <th><?=  $item['cod']; ?></th>
            <th><?=  $item['name']; ?></th>
            <th>R$: <?=number_format( $item['price'], 2, ',' , '.'); ?></th>
            <th><?=  $item['quantity']; ?></th>
            <th>
                <a href="<?= BASE_URL; ?>home/edit/<?=  $item['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
            </th>
        </tr>
    <?php endforeach; ?>
    </table>
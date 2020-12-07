<h1>Relatorios</h1>

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
        <th>Nome do Produto</th>
        <th>Qtd.</th>
        <th>Qtd. Min</th>
        <th>Diferenca</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($list as $item): ?>
        <tr>
            <td><?= $item['name']; ?></td>
            <td><?= $item['quantity']; ?></td>
            <td><?= $item['min_quantity']; ?></td>
            <td><?= (floatval($item['min_quantity']) - floatval($item['quantity'])); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<canvas class="line-chart" ></canvas>

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/canvas.js"></script>
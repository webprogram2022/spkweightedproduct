<!DOCTYPE html>
<html><head>
    <title>Document</title>
</head><body>
    <h2 style="text-align: center;">Rekomendasi Laptop</h2><br>
    <table border="1" class="table table-striped table-bordered">
        <tr class="bg-primary text-white">
            <th>No</th>
            <th>Merk</th>
            <th>Tipe</th>
            <th>Harga</th>
            <th>Nilai V</th>
            <th class="text-center">Ranking</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($total as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data['name']; ?></td>
                <td><?= $data['type']; ?></td>
                <td>Rp.<?= number_format($data['c5']); ?></td>
                <td><?= $data['nilai_v']; ?></td>
                <td class="h5 text-center text-success"><?= $i; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body></html>
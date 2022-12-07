<?php
$namaFile = 'data Laptop';
header("content-type: application/vdn-ms-excel");
header("content-disposition: attechment; filename=" . $namaFile . ".xls");
?>

<body>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>Prosessor</th>
                <th>RAM</th>
                <th>Harddisk</th>
                <th>VGA</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($alternatif as $data) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $data['name']; ?></td>
                    <td><?= $data['type']; ?></td>
                    <td><?= $data['c1']; ?></td>
                    <td><?= $data['c2']; ?></td>
                    <td><?= $data['c3']; ?></td>
                    <td><?= $data['c4']; ?></td>
                    <td><?= $data['c5']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </thead>
    </table>
</body>
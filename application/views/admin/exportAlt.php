<?php
$namaFile = 'Data Bobot Alternatif';
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
                    <td><?= $data['b1']; ?></td>
                    <td><?= $data['b2']; ?></td>
                    <td><?= $data['b3']; ?></td>
                    <td><?= $data['b4']; ?></td>
                    <td><?= $data['b5']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </thead>
    </table>
</body>
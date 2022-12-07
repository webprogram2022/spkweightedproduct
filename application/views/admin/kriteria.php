<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $titlePage; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"></div>
                <div class="card-body">
                    <div class="row m-1">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Kriteria</th>
                                    <th>Bobot</th>
                                    <th>Atribut</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kriteria as $data) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td> <?= $data['kode_kriteria']; ?></td>
                                        <td><?= $data['nama_kriteria']; ?></td>
                                        <td><?= $data['bobot_kriteria']; ?></td>
                                        <td><?php
                                            if ($data['atribut_kriteria'] == 1) {
                                                echo "Benefit";
                                            } else {
                                                echo "Cost";
                                            } ?></td>
                                        <td>
                                            <a href="
                                            <?= base_url('admin/ubahBobotKriteria'); ?>?id=<?= $data['id']; ?>" class="btn btn-primary btn-sm">Ubah Bobot</a>
                                        </td>
                                    </tr>

                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
// var_dump($pBobot);die;
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $titlePage; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary text-white">
                    <h6>Nilai Bobot Kriteria</h6>
                </div>
                <div class="card-body">
                    <div class="row m-1">
                        <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Kriteria</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kriteria as $data) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $data['kode_kriteria']; ?></td>
                                        <td><?= $data['nama_kriteria']; ?></td>
                                        <td><?= $data['bobot_kriteria']; ?></td>
                                        <td><?= $data['atribut_kriteria']; ?></td>

                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                <tr class="bg-primary">
                                    <th class="text-center  text-white" colspan="3">total</th>
                                    <th class="text-white">
                                    </th>

                                    <th></th>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary text-white">
                    <h6>Perbaikan Bobot Kriteria</h6>
                </div>
                <div class="card-body">
                    <div class="row m-1">
                        <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kriteria</th>
                                    <th>Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($pBobot); $i++) : ?>
                                    <tr>
                                        <td><?= $i + 1; ?></td>
                                        <td><?= $pBobot[$i]['nama_kriteria']; ?></td>
                                        <td><?= $pBobot[$i]['p_bobot']; ?></td>
                                    </tr>
                                <?php endfor; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary text-white">
                    <h6>Nilai Bobot Alternatif</h6>
                    <a class="btn btn-warning btn-sm" href="<?= base_url('admin/exportAlt'); ?>">Export Bobot Alternatif</a>
                </div>
                <div class="card-body">
                    <div class="row m-1">
                        <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Alternatif</th>
                                    <th>Tipe</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                </tr>
                            </thead>

                            <tbody>
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



                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary text-white">
                    <h6>Nilai Vektor (S)</h6>
                </div>
                <div class="card-body">
                    <div class="row m-1">
                        <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Alternatif</th>
                                    <th>Tipe</th>
                                    <th>Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($totalS as $data) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $data['name']; ?></td>
                                        <td><?= $data['type']; ?></td>
                                        <td><?= $data['totalS']; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary text-white">
                    <h6>Nilai Vektor (V)</h6>
                    <a href="<?= base_url('admin/inputLaporan'); ?>" class="btn btn-success">Input Laporan</a>
                    <a class="btn btn-danger" href="<?= base_url('admin/pdf'); ?>" class="fas fa-print">Export</a>
                </div>
                <div class="card-body">
                    <div class="row m-1">
                        <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Alternatif</th>
                                    <th>Tipe</th>
                                    <th>Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($total as $data) : ?>
                                    <tr>

                                        <td><?= $i; ?></td>
                                        <td><?= $data['name']; ?></td>
                                        <td><?= $data['type']; ?></td>
                                        <td><?= $data['nilai_v']; ?></td>
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
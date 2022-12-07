<!-- Begin Page Content -->
<?php
$nilai = [];
foreach ($total as $key => $data) {
    $nilai[$key] = $data['nilai_v'];
}
array_multisort($nilai, SORT_DESC, $total);

?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $titlePage; ?></h1>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Laptop</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalData; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="text-primary font-weight-bold">REKOMENDASI LAPTOP</h5>
                    <a href="<?= base_url('admin/pdf'); ?>" class="btn btn-warning">export Laporan</a>
                </div>
                <div class="card-body">
                    <div class="row m-1">
                        <table class="table table-striped table-bordered">
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
                                <tr class="h3 font-weight-bolder text-black">
                                    <td><?= $i; ?></td>
                                    <td><?= $data['name']; ?></td>
                                    <td><?= $data['type']; ?></td>
                                    <td>Rp.<?= number_format($data['c5']); ?></td>
                                    <td><?= $data['nilai_v']; ?></td>
                                    <td class="h5 text-center font-weight-bold text-success"><?= $i; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
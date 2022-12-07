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
                        <form action="<?= base_url('admin/ubahBobot'); ?>" method="post">
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
                                    <?php foreach ($data as $dt) : ?>
                                        <tr>
                                            <input type="hidden" name="id" value="<?= $dt['id']; ?>">

                                            <td><?= $i; ?></td>
                                            <td>
                                                <input type="text" class="form-control" name="kode_kriteria" value="<?= $dt['kode_kriteria']; ?>">
                                            <td>
                                                <input type="text" class="form-control" name="nama_kriteria" value="<?= $dt['nama_kriteria']; ?>">
                                            <td>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <select class="form-control" name="atribut_kriteria">
                                                            <option selected>Pilih...</option>
                                                            <option value="1"></option>
                                                            <option value="2"></option>
                                                            <option value="3"></option>
                                                            <option value="4"></option>
                                                            <option value="5"></option>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" name="atribut_kriteria">
                                                        <option selected>Pilih...</option>
                                                        <option value="1">Benefit</option>
                                                        <option value="-1">Cost</option>
                                                </div>

                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-success btn-sm">Ubah Bobot</button>
                                            </td>
                                        </tr>

                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
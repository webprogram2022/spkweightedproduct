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
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                </div>
                <div class="card-body">
                    <div class="row m-1">
                        <form action="<?= base_url('admin/ubah'); ?>" method="post">
                            <table class="table table-bordered table table-striped">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th class="text-center" rowspan="2">Merk</th>
                                        <th class="text-center" rowspan="2">Type</th>
                                        <th class="text-center" colspan="5">Kriteria</th>
                                        <th class="text-center" rowspan="2">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">c1</th>
                                        <th class="text-center">c2</th>
                                        <th class="text-center">c4</th>
                                        <th class="text-center">c4</th>
                                        <th class="text-center">c5</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $ubah) : ?>
                                        <tr>
                                            <input type="hidden" name="id" value="<?= $ubah['id']; ?>">
                                            <div class="form-group">
                                                <td>
                                                    <input type="text" name="name" class="form-control text-center" value=" <?= $ubah['name']; ?>" required>
                                                </td>
                                            </div>
                                            <div class="form-group">
                                                <td>
                                                    <input type="text" name="type" class="form-control text-center" value="<?= $ubah['type']; ?>" required>
                                                </td>
                                            </div>
                                            <div class="form-group">
                                                <td>
                                                    <input type="text" name="c1" class="form-control text-center" value="<?= $ubah['c1']; ?>" required>
                                                </td>
                                            </div>
                                            <div class="form-group">
                                                <td>
                                                    <input type="text" name="c2" class="form-control text-center" value="<?= $ubah['c2']; ?>" required>
                                                </td>
                                            </div>
                                            <div class="form-group">
                                                <td>
                                                    <input type="text" name="c3" class="form-control text-center" value="<?= $ubah['c3']; ?>" required>
                                                </td>
                                            </div>
                                            <div class="form-group">
                                                <td>
                                                    <input type="text" name="c4" class="form-control text-center" value="<?= $ubah['c4']; ?>" required>
                                                </td>
                                            </div>
                                            <div class="form-group">
                                                <td>
                                                    <input type="text" name="c5" class="form-control text-center" value="<?= $ubah['c5']; ?>" required>
                                                </td>
                                            </div>

                                            <td rowspan="2" class="text-center">
                                                <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Data akan diubah?');">Ubah</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="text-center bg-primary text-white">Bobot</th>
                                            <th class="text-center">
                                                <div class="form-group">
                                                    <select class="form-control" name="b1">
                                                        <option selected>Bobot...</option>
                                                        <option value="5">Sangat Tinggi</option>
                                                        <option value="4">Tinggi</option>
                                                        <option value="3">Sedang</option>
                                                        <option value="2">Rendah</option>
                                                        <option value="1">Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </th>
                                            <th class="text-center">
                                                <div class="form-group">
                                                    <select class="form-control" name="b2">
                                                        <option selected>Bobot...</option>
                                                        <option value="5">Sangat Tinggi</option>
                                                        <option value="4">Tinggi</option>
                                                        <option value="3">Sedang</option>
                                                        <option value="2">Rendah</option>
                                                        <option value="1">Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </th>
                                            <th class="text-center">
                                                <div class="form-group">
                                                    <select class="form-control" name="b3">
                                                        <option selected>Bobot...</option>
                                                        <option value="5">Sangat Tinggi</option>
                                                        <option value="4">Tinggi</option>
                                                        <option value="3">Sedang</option>
                                                        <option value="2">Rendah</option>
                                                        <option value="1">Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </th>
                                            <th class="text-center">
                                                <div class="form-group">
                                                    <select class="form-control" name="b4">
                                                        <option selected>Bobot...</option>
                                                        <option value="5">Sangat Tinggi</option>
                                                        <option value="4">Tinggi</option>
                                                        <option value="3">Sedang</option>
                                                        <option value="2">Rendah</option>
                                                        <option value="1">Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </th>
                                            <th class="text-center">
                                                <div class="form-group">
                                                    <select class="form-control" name="b5">
                                                        <option selected>Bobot...</option>
                                                        <option value="1">Sangat Mahal </option>
                                                        <option value="4">Mahal</option>
                                                        <option value="3">Sedang</option>
                                                        <option value="2">murah</option>
                                                        <option value="1">Sangat murah</option>
                                                    </select>
                                                </div>
                                            </th>
                                        </tr>
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
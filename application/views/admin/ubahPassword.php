<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-5 card shadow">
            <div class="col-xl-5 col-lg-5">

                <div class="card shadow mb-4 mt-3">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary text-white">
                        <h6>Ubah Password</h6>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/ubahPassword'); ?>" method="post">
                            <?= $this->session->flashdata('message'); ?>
                            <div class="row m-1">
                                <div class="form-group">
                                    <label class="" for="p1">Password Sekarang</label>
                                    <input type="password" name="password" class="form-control" id="p1" required>
                                </div>
                            </div>
                            <div class="row m-1">
                                <div class="form-group">
                                    <label class="" for="p2">Password Baru</label>
                                    <input type="password" name="password2" class="form-control" id="p2" required>
                                </div>
                            </div>
                            <div class="row  m-1">
                                <div class="form-group">
                                    <label class="" for="p3">Ulangi Password Baru</label>
                                    <input type="password" name="password3" class="form-control" id="p3" required>
                                </div>
                            </div>
                            <hr>
                            <button class="btn btn-danger" type="reset">Reset</button>
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
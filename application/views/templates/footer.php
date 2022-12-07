<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Zulfikri 2022</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Button trigger modal -->


<!-- Modal kriteria-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="col">
                        <div class="input-group mb-3">
                            <input class="form-control form-control-user" type="text" name="kode" placeholder="Kode...">
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" name="kode" placeholder="Kriteria...">
                        </div>
                        <div class="input-group mb-3">
                            <select id="inputState" class="form-control">
                                <option selected>Bobot...</option>
                                <option value="1">Sangat Tinggi</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <select id="inputState" class="form-control">
                                <option selected>Karakter...</option>
                                <option value="1">Benefit</option>
                                <option value="-1">Cost</option>

                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Alternatif-->
<div class="modal fade" id="exampleModal2" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahAlternatif'); ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Merk">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="type" placeholder="Type">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="c1" placeholder="Processor...">
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" name="b1">
                                <option selected>Bobot...</option>
                                <option value="5">Sangat Tinggi</option>
                                <option value="4">Tinggi</option>
                                <option value="3">Sedang</option>
                                <option value="2">Rendah</option>
                                <option value="1">Sangat Rendah</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="c2" placeholder="RAM...">
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" name="b2">
                                <option selected>Bobot...</option>
                                <option value="5">Sangat Tinggi</option>
                                <option value="4">Tinggi</option>
                                <option value="3">Sedang</option>
                                <option value="2">Rendah</option>
                                <option value="1">Sangat Rendah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="c3" placeholder="Harddisk...">
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" name="b3">
                                <option selected>Bobot...</option>
                                <option value="5">Sangat Tinggi</option>
                                <option value="4">Tinggi</option>
                                <option value="3">Sedang</option>
                                <option value="2">Rendah</option>
                                <option value="1">Sangat Rendah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="c4" placeholder="VGA...">
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" name="b4">
                                <option selected>Bobot...</option>
                                <option value="5">Sangat Tinggi</option>
                                <option value="4">Tinggi</option>
                                <option value="3">Sedang</option>
                                <option value="2">Rendah</option>
                                <option value="1">Sangat Rendah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="c5" placeholder="Harga...">
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" name="b5">
                                <option selected>Bobot...</option>
                                <option value="5">Sangat Mahal</option>
                                <option value="4">Mahal</option>
                                <option value="3">Sedang</option>
                                <option value="2">murah</option>
                                <option value="1">Sangat murah</option>

                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" onclick="return confirm('Tambah Data?');">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
</div>



<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>

</body>

</html>
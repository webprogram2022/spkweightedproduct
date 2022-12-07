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
                     <a href="#" data-toggle="modal" data-target="#exampleModal2" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah <?= $titlePage; ?></a>
                     <a class="btn btn-warning btn-sm" href="<?= base_url('admin/export'); ?>">Export Excell</a>
                 </div>
                 <div class="card-body">
                     <div class="row m-1">
                         <table class="table table-bordered table-striped ">
                             <thead>
                                 <tr class="bg-primary text-white">
                                     <th class="text-xl-center" rowspan="2">No</th>
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
                                 <?php $i = 1; ?>
                                 <?php foreach ($alternatif as $data) : ?>
                                     <tr>
                                         <td class="text-center"><?= $i; ?></td>
                                         <td class="text-center"><?= $data['name']; ?></td>
                                         <td class="text-center"><?= $data['type']; ?></td>
                                         <td class="text-center"><?= $data['c1']; ?></td>
                                         <td class="text-center"><?= $data['c2']; ?></td>
                                         <td class="text-center"><?= $data['c3']; ?></td>
                                         <td class="text-center"><?= $data['c4']; ?></td>
                                         <td class="text-center">Rp.<?= number_format($data['c5']); ?></td>
                                         <td>
                                             <a href="<?= base_url('admin/ubahAlter'); ?>?id=<?= $data['id']; ?>" class="btn btn-success btn-sm">Ubah</a>
                                             <a href="<?= base_url('admin/hapusAlternatif'); ?>?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus?');">Hapus</a>
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
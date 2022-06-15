  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Produk</h1>
            <a href="<?= base_url('/admin/tambah_produk'); ?>" class="btn btn-primary">Tambah Produk</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Data Produk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


            <div class="card">
              <div class="card-header">
                <h2 class="card-title"><b>Data Produk Jamu</b></h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
                <table id="sortable" class="table table-bordered table-striped">
                  <thead align="center">
                    <tr>
                      <th>No</th>
                      <th>Nama Produk</th>
                      <th>Jenis Produk</th>
                      <th>Stok</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($produk as $row) {
                    ?>
                      <tr>
                        <td align="center"><?= $no++; ?></td>
                        <td><?= $row->nama_produk; ?></td>
                        <td><?= $row->jenis_produk; ?></td>
                        <td><?= $row->stok_produk; ?></td>
                        <td><?= $row->harga_produk; ?></td>

                        <td align="center">
                          <a title="Edit" href="<?= base_url("admin/edit_produk/$row->id_produk"); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                          <a title="Delete" href="<?= base_url("admin/hapus_produk/$row->id_produk") ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"><i class="fas fa-trash-alt"></i></a>
                          <!-- <a href=""><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></a> -->
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot align="center">
                    <tr>
                      <th>No</th>
                      <th>Nama Produk</th>
                      <th>Jenis Produk</th>
                      <th>Stok</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </body>

  </html>
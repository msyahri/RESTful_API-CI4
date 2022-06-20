  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Laporan Penjualan Agen</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="">Home</a></li>
                          <li class="breadcrumb-item active">Laporan Agen</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main Content -->
      <div class="container">
          <div class="card">
              <div class="card-header">
              <h2 class="card-title"><b>Edit Laporan Penjualan Agen</b></h2>
              </div>
              <div class="card-body">
                  <?php if (!empty(session()->getFlashdata('error'))) : ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <h4>Periksa Isian Form</h4>
                          </hr />
                          <?php echo session()->getFlashdata('error'); ?>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  <?php endif; ?>
                  <form method="post" action="<?= base_url('admin/redo_report/' . $report->id) ?>">
                      <?= csrf_field(); ?>

                      <div class="form-group">
                          <label for="nama_agen">Nama Agen</label>
                          <input disabled type="text" class="form-control" id="nama_agen" name="nama_agen" value="<?= $report->nama_agen; ?>">
                      </div>

                      <div class="form-group">
                          <label for="stok">Stok Agen</label>
                          <input type="stok" class="form-control" id="stok" name="stok" value="<?= $report->stok; ?>">
                      </div>

                      <div class="form-group">
                          <label for="terjual">Jumlah Terjual</label>
                          <input type="text" class="form-control" id="terjual" name="terjual" value="<?= $report->terjual; ?>" />
                      </div>

                      <div class="form-group">
                          <label for="upah">Kustom Upah @produk</label>
                          <input type="text" class="form-control" id="upah" name="upah" value="<?= $report->upah; ?>" />
                      </div>

                      <div class="form-group">
                          <input type="submit" value="Update" class="btn btn-warning" />
                          <a href="<?= base_url('admin/report'); ?>" class="btn btn-info">Batal</a>
                      </div>

                  </form>
              </div>
          </div>
      </div>
  </div>
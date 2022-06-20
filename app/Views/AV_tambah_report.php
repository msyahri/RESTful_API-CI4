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
                  <h2 class="card-title"><b>Tambah Pantauan Pelaporan</b></h2>
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
                  <form method="post" action="<?= base_url('admin/report_submit/') ?>">
                      <?= csrf_field(); ?>

                      <div class="form-group">
                          <select class="form-control" name="nama_agen">
                          <option selected value="">Pilih Agen</option>
                              <?php foreach ($agen as $row) { ?>
                                  <option value="<?= $row->nama_agen; ?>"><?= $row->nama_agen; ?> </option>
                              <?php } ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <select class="form-control" name="email">
                          <option selected value="">Email Agen (pastikan cocok dengan data agen)</option>
                              <?php foreach ($agen as $row) { ?>
                                  <option value="<?= $row->email_agen; ?>"><?= $row->email_agen; ?> </option>
                              <?php } ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="stok">Stok Awal</label>
                          <input type="text" class="form-control" id="stok" name="stok" value="<?= old('stok') ?>" />
                      </div>

                      <div class="form-group">
                          <input type="submit" value="Tambah" class="btn btn-primary" />
                          <a href="<?= base_url('admin/report'); ?>" class="btn btn-info">Batal</a>
                      </div>

                  </form>
              </div>
          </div>
      </div>
  </div>
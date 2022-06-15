  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Agen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Tambah Agen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main Content -->
<div class="container">
    <div class="card">
        <div class="card-header">
        <h2 class="card-title"><b>Tambah Agen</b></h2>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('admin/store_new_agen') ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="nama_agen">Nama Agen</label>
                    <input type="text" class="form-control" id="nama_agen" name="nama_agen" value="<?= old('nama_agen'); ?>">
                </div>

                <div class="form-group">
                    <label for="email_agen">Email</label>
                    <input type="text" class="form-control" id="email_agen" name="email_agen" value="<?= old('email_agen'); ?>">
                </div>

                <div class="form-group">
                    <label for="nope_agen">No. Telp.</label>
                    <input type="text" class="form-control" id="nope_agen" name="nope_agen" value="<?= old('nope_agen') ?>" />
                </div>

                <div class="form-group">
                    <label for="alamat_agen">Alamat</label>
                    <input type="text" class="form-control" id="alamat_agen" name="alamat_agen" value="<?= old('alamat_agen') ?>" />
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-success" />
                    <a href="<?= base_url('admin/agen'); ?>" class="btn btn-warning">Batal</a>
                </div>

            </form>
        </div>
    </div>
</div>
  </div>
  
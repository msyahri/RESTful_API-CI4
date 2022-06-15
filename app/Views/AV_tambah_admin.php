<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Akses Admin</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Admin</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main Content -->
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h2 class="card-title"><b>Tambah Kredensial</b></h2>
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
        <form method="post" action="<?= base_url('admin/sa_submit') ?>">
          <?= csrf_field(); ?>

          <div class="form-group">
            <label for="unm">Username</label>
            <input type="text" class="form-control" id="unm" name="unm" value="<?= old('unm'); ?>">
          </div>

          <div class="form-group">
            <label for="u_e">Email</label>
            <input type="text" class="form-control" id="u_e" name="u_e" value="<?= old('u_e'); ?>">
          </div>

          <div class="form-group">
            <label for="u_p">Password</label>
            <input type="text" class="form-control" id="u_p" name="u_p" value="<?= old('u_p') ?>" />
          </div>

          <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-success" />
            <a href="<?= base_url('admin/super'); ?>" class="btn btn-warning">Batal</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Informasi Kontak</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="">Home</a></li>
                          <li class="breadcrumb-item active">Info Kontak</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main Content -->
      <div class="container">
          <div class="card">
          <?php if (!empty(session()->getFlashdata('message'))) : ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>
              <div class="card-header">
              <h2 class="card-title"><b>Update Info Kontak</b></h2>
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
                  <form method="post" action="<?= base_url('admin/redo_profil/1') ?>">
                      <?= csrf_field(); ?>

                      <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $profil->alamat; ?>">
                      </div>

                      <div class="form-group">
                          <label for="nope">No. Telepon</label>
                          <input type="nope" class="form-control" id="nope" name="nope" value="<?= $profil->nope; ?>">
                      </div>

                      <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" value="<?= $profil->email; ?>" />
                      </div>

                      <div class="form-group">
                          <label for="website">Alamat Website</label>
                          <input type="text" class="form-control" id="website" name="website" value="<?= $profil->website; ?>" />
                      </div>

                      <div class="form-group">
                          <input type="submit" value="Perbarui Info" class="btn btn-warning" />
                      </div>

                  </form>
              </div>
          </div>
      </div>
  </div>
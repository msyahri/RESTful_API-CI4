  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Data Produk</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="">Home</a></li>
                          <li class="breadcrumb-item active">Update Data Produk</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main Content -->
      <div class="container">
          <div class="card">
              <div class="card-header">
              <h2 class="card-title"><b>Update Data Produk</b></h2>
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
                  <form method="post" action="<?= base_url('admin/do_edit_produk/' . $produk->id_produk) ?>">
                      <?= csrf_field(); ?>

                      <div class="form-group">
                          <label for="nama_produk">Nama Produk</label>
                          <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $produk->nama_produk; ?>">
                      </div>

                      <div class="form-group">
                          <label for="jenis_produk">Jenis Produk</label>
                          <select name="jenis_produk" class="form-control" id="jenis_produk">
                              <option value="Serbuk Instant" <?= ($produk->jenis_produk == "Serbuk Instant" ? "selected" : ""); ?>>Serbuk Instant</option>
                              <option value="Botol Siap Minum" <?= ($produk->jenis_produk == "Botol Siap Minum" ? "selected" : ""); ?>>Botol Siap Minum</option>
                          </select>
                      </div>

                      <div class="form-group">
                          <label for="harga_produk">Harga Produk</label>
                          <input type="text" class="form-control" id="harga_produk" name="harga_produk" value="<?= $produk->harga_produk; ?>" />
                      </div>

                      <div class="form-group">
                          <label for="stok_produk">Stok Sroduk</label>
                          <input type="text" class="form-control" id="stok_produk" name="stok_produk" value="<?= $produk->stok_produk; ?>" />
                      </div>

                      <div class="form-group">
                          <input type="submit" value="Update" class="btn btn-warning" />
                          <a href="<?= base_url('admin/produk'); ?>" class="btn btn-info">Batal</a>
                      </div>

                  </form>
              </div>
          </div>
      </div>
  </div>
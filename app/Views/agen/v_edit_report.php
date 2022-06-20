<!-- Main Content -->
<!-- Customized CSS -->
<style>
.mf {
    margin: 20px;
    padding-top: 1px;
  }

.pf {
    padding-top: 10px;
    padding-bottom: 10px;
  }
</style>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header mf">
                                    <h2 class="card-title"><b>Update Laporan Penjualan</b></h2>
                                </div>
                                <div class="card-body mf pf">
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
                                    <form method="post" action="<?= base_url('agen/redo_report/' . $report->id) ?>">
                                        <?= csrf_field(); ?>

                                        <div class="form-group">
                                            <label for="stok"><b>Stok Tersedia</b></label>
                                            <input readonly type="stok" class="form-control" id="stok" name="stok" value="<?= $report->stok; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="sudah_terjual"><b>Jumlah Sudah Terjual</b></label>
                                            <input readonly type="text" class="form-control" id="sudah_terjual" name="sudah_terjual" value="<?= $report->terjual; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label for="terjual"><b>Jumlah Baru Terjual</b></label>
                                            <input type="text" class="form-control" id="terjual" name="terjual" value="" />
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" value="Update" class="btn btn-warning" />
                                            <a href="<?= base_url('agen/report'); ?>" class="btn btn-info">Batal</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
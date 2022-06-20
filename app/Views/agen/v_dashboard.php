        <style>
            .bg{
                background-color: green;
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
                                        <div class="header">
                                            <h4 class="title">DATA PRODUK</h4>
                                            <p class="category">Daftar detail produk dari server.</p>
                                            <a href="<?= base_url('/agen'); ?>" class="btn btn-primary"><i class="fa fa-undo"></i><b> Refresh</b></a>
                                        </div>
                                        <div class="content table-responsive table-full-width mt">
                                            <table id="sortable" class="table table-hover table-striped">
                                                <thead>
                                                    <th><b>No.</b></th>
                                                    <th><b>Nama Produk</b></th>
                                                    <th><b>Jenis Produk</b></th>
                                                    <th><b>Stok Utama</b></th>
                                                    <th><b>Harga Produk</b></th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($produk as $values) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $values['nama_produk']; ?></td>
                                                            <td><?= $values['jenis_produk']; ?></td>
                                                            <td><?= $values['stok_produk']; ?>
                                                                <?php if ($values['stok_produk'] > 0) : ?>
                                                                    <span class="badge badge-success bg"> Tersedia</span>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td><?= $values['harga_produk']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
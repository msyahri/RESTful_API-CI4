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
                                        </div>
                                        <div class="content table-responsive table-full-width">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <th>No.</th>
                                                    <th>Nama Produk</th>
                                                    <th>Jenis Produk</th>
                                                    <th>Stok Utama</th>
                                                    <th>Harga Produk</th>
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
                                                        <td><?= $values['stok_produk']; ?></td>
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
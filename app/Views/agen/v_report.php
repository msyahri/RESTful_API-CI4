        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title"><b>LAPORAN PENJUALAN</b></h4>
                                            <p class="category">Data Laporan Penjualan<br>(<?php echo $email ?>)</p>
                                        </div>
                                        <div class="content table-responsive table-full-width">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <th>
                                                        <font size="+1">Nama Agen</font>
                                                    </th>
                                                    <th>
                                                        <font size="+1">Stok Agen</font>
                                                    </th>
                                                    <th>
                                                        <font size="+1">Produk Terjual</font>
                                                    </th>
                                                    <th>
                                                        <font size="+1">Pendapatan</font>
                                                    </th>
                                                    <th>
                                                        <font size="+1">AKSI</font>
                                                    </th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // $email = session()->get('member_email');
                                                    foreach ($report as $values) {
                                                    ?>
                                                        <tr>
                                                            <?php if ($values->email == $email) : ?>
                                                                <td><b>
                                                                        <font size="+1"><?= $values->nama_agen; ?></font>
                                                                    </b></td>
                                                            <?php endif; ?>
                                                            <?php if ($values->email == $email) : ?>
                                                                <td><b>
                                                                        <font size="+1"><?= $values->stok; ?></font>
                                                                    </b></td>
                                                            <?php endif; ?>
                                                            <?php if ($values->email == $email) : ?>
                                                                <td><b>
                                                                        <font size="+1"><?= $values->terjual; ?></font>
                                                                    </b></td>
                                                            <?php endif; ?>
                                                            <?php if ($values->email == $email) : ?>
                                                                <td><b>
                                                                        <font size="+1">Rp. <?= ($values->upah * $values->terjual); ?></font>
                                                                    </b></td>
                                                            <?php endif; ?>
                                                            <?php if ($values->email == $email) : ?>
                                                                <td>
                                                                    <a title="Edit" href="<?= base_url("agen/edit_report/$values->id"); ?>" class="btn btn-primary btn-lg"><i class="fa fa-edit"></i> <b>Tambah Terjual</b></a>
                                                                </td>
                                                            <?php endif; ?>
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
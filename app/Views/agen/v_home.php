<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="header">
                <h4 class="title">Dashboard Agen Jalumas</h4>
                <h2><b><span id="jam"></span></b> WIB</h2>
                <script type="text/javascript">
                    window.onload = function() {
                        jam();
                    }

                    function jam() {
                        var e = document.getElementById('jam'),
                            d = new Date(),
                            h, m, s;
                        h = d.getHours();
                        m = set(d.getMinutes());
                        s = set(d.getSeconds());

                        e.innerHTML = h + ':' + m + ':' + s;

                        setTimeout('jam()', 1000);
                    }

                    function set(e) {
                        e = e < 10 ? '0' + e : e;
                        return e;
                    }
                </script>
                <p><br>Selamat datang, (<?php echo $email ?>) di panel dashboard.</p>
                <p class="category">Berikut beberapa hal penting untuk diingat terkait dengan akses dahboard</p>

            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Fitur Utama</h5>
                        <div class="alert alert-info alert-with-icon" data-notify="container">
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">
                                <ol>
                                    <b>
                                        <li>Data produk</li>
                                    </b>Anda dapat melihat status terkini terkait keberadaan produk beserta detail produk tersebut termasuk harga utama produk pada menu <b>Data Produk</b><br><br>
                                    <b>
                                        <li>Laporan Penjualan</li>
                                    </b>Menu <b>Laporan Penjualan</b> digunakan untuk melaporkan jumlah produk terjual dan mengirimkan status stok saat ini yang ada pada penjualan Anda. Setiap kali produk terjual, masukkan jumlah pembelian yang dilakukan di menu tersebut.
                                </ol>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5>Penting</h5>

                        <div class="alert alert-warning alert-with-icon" data-notify="container">
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Harap selalu memperbarui laporan penjualan Anda untuk kelancaran monitoring penjualan produk. Periksa juga terkait dengan ketersediaan dan pembaruan produk yang ada di sisi produksi melalui menu data produk. Segala perubahan akan ditampilkan dalam informasi tersebut.</span>
                        </div>

                    </div>
                </div>
                <br>
                <br>

            </div>
        </div>
    </div>
</div>
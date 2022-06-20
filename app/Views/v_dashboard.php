  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $cekproduk; ?></h3>

                <h4>Produk</h4>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $cekagen; ?><sup style="font-size: 20px"></sup></h3>

                <h4>Agen</h4>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $cekagen; ?></h3>

                <h4>API User</h4>
              </div>
              <div class="icon">
                <i class="fa fa-key"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $cekpesan; ?></h3>

                <h4>Pesan Masuk</h4>
              </div>
              <div class="icon">
                <i class="fa fa-comment"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?= $cekadmin; ?></h3>

                <h4>Admin</h4><p>(Akses Utama)
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">

                <h3><span id="jam"></span></h3>
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

                <h4>WIB</h4><p>Waktu Indonesia Barat</p>
              </div>
              <div class="icon">
                <i class="ion ion-clock"></i>
              </div>
              <span class="small-box-footer">Waktu Sistem <i class="fas fa-clock"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">

                <?php

                function tanggal_indonesia($tanggal, $hari = false)
                {
                  $hari = array(
                    1 =>    'Senin',
                    'Selasa',
                    'Rabu',
                    'Kamis',
                    'Jumat',
                    'Sabtu',
                    'Minggu'
                  );

                  $bulan = array(
                    1 =>     'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                  );

                  $var = explode('-', $tanggal);

                  $nowtime =  $var[2] . ' ' . $bulan[(int)$var[1]] . ' ' . $var[0];
                  // var 0 = tanggal
                  // var 1 = bulan
                  // var 2 = tahun
                  if ($hari) {
                    $num = date('N', strtotime($tanggal));
                    return $hari[$num] . ', ' . $nowtime;
                  }
                  return $nowtime;
                } ?>
                <h3><?= tanggal_indonesia(date('Y-m-d'), true); ?></h3>

                <?php
                $jam = date('H:i');
                if ($jam > '05:30' && $jam < '10:00') {
                  $salam = 'Pagi';
                } elseif ($jam >= '10:00' && $jam < '15:00') {
                  $salam = 'Siang';
                } elseif ($jam < '18:00') {
                  $salam = 'Sore';
                } else {
                  $salam = 'Malam';
                }
                ?>

                <h4><?='Selamat ' . $salam . ','?></h4><p> Semoga hari ini menyenangkan.</p>
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
              <span class="small-box-footer">Selengkapnya </span>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- small box -->



      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
//koneksi
session_start();
include "../fungsi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="refresh" content="30" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../../css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="../../css/style.css" />
  <link rel="stylesheet" href="mdi-font/css/material-design-iconic-font.css">
  <link rel="stylesheet" href="mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="mdi-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.4.95/css/materialdesignicons.min.css">
  <title>Kelembaban & Suhu</title>

</head>

<body>

  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#" style="color: white;">Kelembaban & Suhu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- top navigation bar -->
  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
      <nav class="navbar-light">
        <ul class="navbar-nav">
          <br>
          <li>
            <a class="side nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#llayouts">
              <span class="side me-2"><i class="fas fa-thermometer-half"></i></span>
              <span class="side">Ruangan</span>
              <span class="side ms-auto">
                <span class="side right-icon">
                  <i class="side bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="side collapse" id="llayouts">
              <ul class="side navbar-nav ps-3">
                <li>
                  <a href="../kantor/kantor.php" class="side nav-link px-3">
                    <span class="fa fa-home mdi-light"></span>
                    <span class="side">Kantor</span>
                  </a>
                </li>
                <li>
                  <a href="../ruang_tamu/ruang_tamu.php" class="side nav-link px-3">
                    <span class="fa fa-home mdi-light"></span>
                    <span class="side">Ruang Tamu</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="../ruangan/indexruangan.php" class="side nav-link px-3">
              <span class="side me-2"><i class="fa fa-folder"></i></span>
              <span class="side">Kelembaban & Suhu</span>
            </a>
            <a href="../logout.php" class="side nav-link px-3">
              <span class="side me-2"><i class="side bi bi-box-arrow-right"></i></span>
              <span class="side">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- offcanvas -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h4>Ruang Tamu</h4>
          <br>
          <!-- Alert Kelembaban -->
          <?php $querykelembaban = mysqli_query($conn, "SELECT * FROM tb_kelembaban WHERE id_ruangan = 2 ORDER BY id DESC LIMIT 1");
          while ($fetch = mysqli_fetch_array($querykelembaban)) {
            $nilaikelembaban = $fetch['kelembaban'];
          } ?>
          <?php if ($nilaikelembaban > 65) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Kelembaban ruangan tinggi!</strong> Terlalu lembab! Dapat menyebabkan asma/alergi!
              <button type="button" class="btn-close" data-dismiss="alert" aria-label="close"> </button>
            </div>
          <?php
          }
          ?>

          <?php $querykelembaban = mysqli_query($conn, "SELECT * FROM tb_kelembaban WHERE id_ruangan = 2 ORDER BY id DESC LIMIT 1");
          while ($fetch = mysqli_fetch_array($querykelembaban)) {
            $nilaikelembaban = $fetch['kelembaban'];
          } ?>
          <?php if ($nilaikelembaban < 45) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Kelembaban ruangan rendah!</strong> Terlalu kering! Dapat menyebabkan infeksi pernapasan!
              <button type="button" class="btn-close" data-dismiss="alert" aria-label="close"> </button>
            </div>
          <?php
          }
          ?>

          <!-- Alert Suhu -->
          <?php $querysuhu = mysqli_query($conn, "SELECT * FROM tb_suhu WHERE id_ruangan = 2 ORDER BY id_suhu DESC LIMIT 1");
          while ($fetch2 = mysqli_fetch_array($querysuhu)) {
            $nilaisuhu = $fetch2['suhu'];
          } ?>
          <?php if ($nilaisuhu > 40) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Suhu ruangan tinggi!</strong> Terlalu panas!
              <button type="button" class="btn-close" data-dismiss="alert" aria-label="close"> </button>
            </div>
          <?php
          }
          ?>

          <?php $querysuhu = mysqli_query($conn, "SELECT * FROM tb_suhu WHERE id_ruangan = 2 ORDER BY id_suhu DESC LIMIT 1");
          while ($fetch2 = mysqli_fetch_array($querysuhu)) {
            $nilaisuhu = $fetch2['suhu'];
          } ?>
          <?php if ($nilaisuhu < 20) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Suhu ruangan rendah!</strong> Terlalu dingin!
              <button type="button" class="btn-close" data-dismiss="alert" aria-label="close"> </button>
            </div>
          <?php
          }
          ?>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <a href="#Kelembaban" data-toggle="modal">
            <div class="overview-item overview-item--c1">
              <div class="overview__inner">
                <div class="overview-box clearfix">
                  <div class="icon">
                    <span class="mdi mdi-water mdi-48px"></span>
                  </div>
                  <div class="text">
                    <span>Kelembaban</span>
                    <h2>
                      <?php $result1 = mysqli_query($conn, "SELECT * FROM tb_kelembaban WHERE id_ruangan = 2 ORDER BY id DESC LIMIT 1"); ?>
                      <?php foreach ($result1 as $row) : ?>
                        <?= $row['kelembaban']; ?>
                      <?php endforeach;
                      ?>
                    </h2>

                  </div>
                </div>
                <div class="overview-chart">
                  <canvas id="widgetChart"></canvas>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="#Suhu" data-toggle="modal">
            <div class="overview-item overview-item--c3">
              <div class="overview__inner">
                <div class="overview-box clearfix">
                  <div class="icon">
                    <span class="mdi mdi-thermometer mdi-48px"></span>
                  </div>
                  <div class="text">
                    <span>Suhu</span>
                    <h2>
                      <?php $result = mysqli_query($conn, "SELECT * FROM tb_suhu WHERE id_ruangan = 2 ORDER BY id_suhu DESC LIMIT 1"); ?>
                      <?php foreach ($result as $row) : ?>
                        <?= $row['suhu']; ?>
                      <?php endforeach;
                      ?>
                      °C
                    </h2>
                  </div>
                </div>
                <div class="overview-chart">
                  <canvas id="widgetChart"></canvas>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <!-- modal 2 -->
      <div class="row">
        <div class="col">
          <div class="modal fade" id="kelembabanruangan" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="smallmodalLabel">Kelembaban Ruangan</h5>
                  <button type="button" class="btn-close float-end" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prosesinputkelembaban.php" method="post" style="margin-left: 10px; margin-right: 10px">
                  <div class="mt-2">
                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_kelembaban WHERE id_ruangan = 2 ORDER BY id DESC LIMIT 1"); ?>
                    <?php foreach ($result as $row) : ?>
                      <label for="" class="form-label">Id_Kelembaban</label>
                      <input type="text" name="id" id="id" class="form-control" value="<?= $row['id']; ?>" readonly>
                      <label for="" class="form-label">Id_Ruangan</label>
                      <input type="text" name="id_ruangan" id="id_ruangan" class="form-control" value="<?= $row['id_ruangan']; ?>" readonly>
                      <label for="" class="form-label">Waktu</label>
                      <input type="text" name="waktu" id="waktu" class="form-control" value="<?= $row['waktu']; ?>" readonly>
                      <label for="" class="form-label">Kelembaban</label>
                      <input type="text" name="lembab" id="lembab" class="form-control" value="<?= $row['kelembaban']; ?>" readonly>
                      <label for="" class="form-label">Waktu Aksi</label>
                      <input type="datetime-local" name="aksi_waktu" id="aksi_waktu" class="form-control">
                    <?php endforeach; ?>
                  </div>
                  <button type="submit" name="edit" id="edit" class="btn btn-primary mb-2 mt-3">Kirim</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="modal fade" id="suhuruangan" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="smallmodalLabel">Suhu Ruangan</h5>
                  <button type="button" class="btn-close float-end" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prosesinputsuhu.php" method="post" style="margin-left: 10px; margin-right: 10px">
                  <div class="mt-2">
                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_suhu WHERE id_ruangan = 2 ORDER BY id_suhu DESC LIMIT 1"); ?>
                    <?php foreach ($result as $row) : ?>
                      <label for="" class="form-label">Id_Suhu</label>
                      <input type="text" name="id_suhu" id="id_suhu" class="form-control" value="<?= $row['id_suhu']; ?>" readonly>
                      <label for="" class="form-label">Id_Ruangan</label>
                      <input type="text" name="id_ruangan" id="id_ruangan" class="form-control" value="<?= $row['id_ruangan']; ?>" readonly>
                      <label for="" class="form-label">Waktu</label>
                      <input type="text" name="waktu" id="waktu" class="form-control" value="<?= $row['waktu']; ?>" readonly>
                      <label for="" class="form-label">Suhu</label>
                      <input type="text" name="suhu" id="suhu" class="form-control" value="<?= $row['suhu']; ?>" readonly>
                      <label for="" class="form-label">Waktu Aksi</label>
                      <input type="datetime-local" name="aksi_waktu" id="aksi_waktu" class="form-control">
                    <?php endforeach; ?>
                  </div>
                  <button type="submit" name="edit" id="edit" class="btn btn-primary mb-2 mt-3">Kirim</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="Kelembaban" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="smallmodalLabel">Kelembaban Ruangan</h5>
            <button type="button" class="btn-close float-end" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post" style="margin-left: 10px; margin-right: 10px">
            <p>Kelembaban Ruangan Sekarang
              <b>
                <?php $result = mysqli_query($conn, "SELECT * FROM tb_kelembaban WHERE id_ruangan = 2 ORDER BY id DESC LIMIT 1"); ?>
                <?php foreach ($result as $row) : ?>
                  <?= $row['kelembaban']; ?>
                <?php endforeach;
                ?>
              </b>
              <strong>% RH</strong>
            </p>
            <p>Kelembaban Ruangan Ideal
              <b>
                <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ruangan = 2"); ?>
                <?php foreach ($result as $row) : ?>
                  <?= $row['kelembaban']; ?>
                <?php endforeach;
                ?>
              </b>
              <strong>°C</strong>
            </p>
            <button class="btn btn-primary mb-2"><a data-dismiss="modal" data-toggle="modal" href="#kelembabanruangan" style="text-decoration: none; color: white;">Aksi</a></button>
          </form>
        </div>
      </div>
    </div>
    </div>

    <div class="modal fade" id="Suhu" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="smallmodalLabel">Suhu Ruangan</h5>
            <button type="button" class="btn-close float-end" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post" style="margin-left: 10px;">
            <p>Suhu Ruangan Sekarang
              <b>
                <?php $result = mysqli_query($conn, "SELECT * FROM tb_suhu WHERE id_ruangan = 2 ORDER BY id_suhu DESC LIMIT 1"); ?>
                <?php foreach ($result as $row) : ?>
                  <?= $row['suhu']; ?>
                <?php endforeach;
                ?>
                °C
              </b>
            </p>
            <p>Suhu Ruangan Ideal
              <b>
                <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ruangan = 2"); ?>
                <?php foreach ($result as $row) : ?>
                  <?= $row['suhu']; ?>
                <?php endforeach;
                ?>
                °C
              </b>
            </p>
            <button class="btn btn-primary mb-2"><a data-dismiss="modal" data-toggle="modal" href="#suhuruangan" style="text-decoration: none; color: white;">Aksi</a></button>
          </form>
        </div>
      </div>
    </div>


  </main>
  <script src="../.././js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="../.././js/jquery-3.5.1.js"></script>
  <script src="../.././js/jquery.dataTables.min.js"></script>
  <script src="../.././js/dataTables.bootstrap5.min.js"></script>
  <script src="../.././js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>
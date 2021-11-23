<?php
//koneksi
session_start();
include "fungsi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="refresh" content="30" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
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
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#" style="color: white;">Monitoring Suhu dan Kelembaban</a>
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

  </main>
  <script src=".././js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src=".././js/jquery-3.5.1.js"></script>
  <script src=".././js/jquery.dataTables.min.js"></script>
  <script src=".././js/dataTables.bootstrap5.min.js"></script>
  <script src=".././js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>
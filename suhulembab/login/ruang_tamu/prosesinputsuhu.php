<?php
include '../fungsi.php';

global $conn;

if (isset($_POST['edit'])) {
    $id = $_POST['id_suhu'];
    $id_ruangan = $_POST['id_ruangan'];
    $waktu = $_POST['waktu'];
    $suhu = $_POST['suhu'];
    $aksi_waktu = $_POST['aksi_waktu'];

    $query = "UPDATE tb_suhu SET id_ruangan = '$id_ruangan', waktu = '$waktu', suhu = '$suhu', aksi_waktu = '$aksi_waktu' WHERE id_suhu = '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query gagal dijalankan." . mysqli_errno($conn) . " - " . mysqli_error($conn));
    } else {
        echo "<script>
            alert('Berhasil ditambah!');
            window.location.href='ruang_tamu.php';
        </script>";
    }
}

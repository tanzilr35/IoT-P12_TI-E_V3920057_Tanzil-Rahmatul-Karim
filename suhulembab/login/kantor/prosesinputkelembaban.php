<?php
include '../fungsi.php';

global $conn;

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $id_ruangan = $_POST['id_ruangan'];
    $waktu = $_POST['waktu'];
    $kelembaban = $_POST['kelembaban'];
    $aksi_waktu = $_POST['aksi_waktu'];

    $query = "UPDATE tb_kelembaban SET id_ruangan = '$id_ruangan', waktu = '$waktu', kelembaban = '$kelembaban', aksi_waktu = '$aksi_waktu' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query gagal dijalankan." . mysqli_errno($conn) . " - " . mysqli_error($conn));
    } else {
        echo "<script>
            alert('Berhasil ditambah!');
            window.location.href='kantor.php';
        </script>";
    }
}

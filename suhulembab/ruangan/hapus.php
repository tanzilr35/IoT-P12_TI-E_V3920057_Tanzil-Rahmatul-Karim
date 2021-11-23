<?php
// include database connection file
include "koneksi.php";

// Get id from URL to delete that user
$id_ruangan = $_GET['id_ruangan'];
// Delete user row from table based on given id
$result = mysqli_query($konek, "DELETE FROM tb_set_poin WHERE id_ruangan=$id_ruangan");
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");

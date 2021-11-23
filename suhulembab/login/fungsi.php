<?php
// koneksi ke database
// urutannya string(nama host), username mysql, password, nama database
$conn = mysqli_connect("localhost", "root", "", "db_suhulembab");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

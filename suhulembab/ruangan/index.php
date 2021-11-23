<html>

<head>
    <title>Kelembaban & Suhu</title>
    <style>
        .table1 {
            font-family: sans-serif;
            color: #444;
            border-collapse: collapse;
            width: 50%;
            border: 1px solid #f2f5f7;
        }

        .table1 tr th {
            background: #35A9DB;
            color: #fff;
            font-weight: normal;
        }

        .table1,
        th,
        td {
            padding: 8px 20px;
            text-align: left;
        }

        .table1 tr:hover {
            background-color: #f5f5f5;
        }

        .table1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body style="font-family:arial">
    <center>
        <h2>Kelembaban & Suhu</h2>
    </center>
    <hr />
    <a href="tambah.php">+ Tambah Ruangan</a><br /><br />
    <b>Data Ruangan</b>
    <table style="width:100%" class="table1">
        <tr>
            <th>No</th>
            <th>Nama Ruangan</th>
            <th>Kelembaban</th>
            <th>Suhu</th>
            <th colspan=2>
                <center>Opsi</center>
            </th>
        </tr>

        <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($konek, "select * from tb_set_poin");
        while ($r = mysqli_fetch_array($data)) {
            $id_ruangan = $r['id_ruangan'];
            $nama_ruangan = $r['nama_ruangan'];
            $kelembaban = $r['kelembaban'];
            $suhu = $r['suhu'];
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $nama_ruangan; ?></td>
                <td><?php echo $kelembaban; ?></td>
                <td><?php echo $suhu; ?></td>
                <td align=right width=70px><a href="edit.php?id=<?php echo $id_ruangan; ?>">Edit</a></td>
                <td align=right width=70px><a href="hapus.php?id=<?php echo $id_ruangan; ?>">Hapus</a></td>
            </tr>

        <?php
        }
        ?>
    </table>
    <a href="../index.php">Kembali ke halaman utama</a>
</body>

</html>
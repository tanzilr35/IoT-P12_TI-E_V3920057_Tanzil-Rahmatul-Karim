<?php
// include database connection file
include "koneksi.php";

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id_ruangan = $_POST['id_ruangan'];

    $nama_ruangan = $_POST['nama_ruangan'];
    $kelembaban = $_POST['kelembaban'];
    $suhu = $_POST['suhu'];

    // update user data
    $result = mysqli_query($konek, "UPDATE tb_set_poin SET nama_ruangan='$nama_ruangan',kelembaban='$kelembaban',suhu='$suhu' WHERE id_ruangan=$id_ruangan");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_ruangan = $_GET['id_ruangan'];

// Fetech user data based on id
$result = mysqli_query($konek, "SELECT * FROM tb_set_poin WHERE id_ruangan=$id_ruangan");

while ($r = mysqli_fetch_array($result)) {
    $nama_ruangan = $r['nama_ruangan'];
    $kelembaban = $r['kelembaban'];
    $suhu = $r['suhu'];
}
?>


<html>

<head>
    <title>Edit Ruangan</title>
</head>

<body style="font-family:arial">
    <center>
        <h2>Kelembaban & Suhu</h2>
    </center>
    <hr />
    <b>Edit Ruangan</b>
    <br /><br />
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Nama Ruangan</td>
                <td><input type="text" size="50" name="nama_ruangan" value="<?php echo $nama_ruangan; ?>"></td>
            </tr>
            <tr>
                <td>Kelembaban</td>
                <td><input type="text" size="50" name="kelembaban" value="<?php echo $kelembaban; ?>"></td>
            </tr>
            <tr>
                <td>Suhu</td>
                <td><input type="text" size="50" name="suhu" value="<?php echo $suhu; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_ruangan" value=<?php echo $_GET['id_ruangan']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>
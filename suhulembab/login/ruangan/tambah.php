<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md">
                <h2><i class="bi bi-file-earmark-plus-fill"></i> Tambah Data</h2>
            </div>
            <hr>
        </div>
        <div class="row align-items-center">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_ruangan" placeholder="Nama Ruangan" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kelembaban</label>
                        <input type="text" class="form-control" name="kelembaban" placeholder="Kelembaban" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Suhu</label>
                        <input type="text" class="form-control" name="suhu" placeholder="Suhu" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Waktu Input</label>
                        <input type="datetime-local" class="form-control" name="waktu_input">
                    </div>
                    <a href="indexruangan.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" name="Submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <?php
    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $nama_ruangan = $_POST['nama_ruangan'];
        $kelembaban = $_POST['kelembaban'];
        $suhu = $_POST['suhu'];
        $waktu_input = $_POST['waktu_input'];

        // include database connection file
        include "../fungsi.php";

        // Insert user data into table
        $tambah_ruangan = "insert into tb_set_poin values('','$nama_ruangan','$kelembaban','$suhu','$waktu_input')";
        $kerjakan = mysqli_query($conn, $tambah_ruangan);
        if ($kerjakan) {
            // Show message when user added
            echo "Ruangan berhasil ditambahkan.";
            header("Location: indexruangan.php");
        } else {
            echo "Gagal dijalankan!";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
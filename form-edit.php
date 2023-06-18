<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <header>
            <h3>Formulir Edit Siswa</h3>
        </header>

        <form action="proses-edit.php" method="POST">

            <fieldset>

                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" name="nama" class="form-control" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat:</label>
                    <textarea name="alamat" class="form-control"><?php echo $siswa['alamat'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                    <?php $jk = $siswa['jenis_kelamin']; ?>
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" value="laki-laki" class="form-check-input" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>>
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" value="perempuan" class="form-check-input" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>>
                        <label class="form-check-label">Perempuan</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama:</label>
                    <?php $agama = $siswa['agama']; ?>
                    <select name="agama" class="form-select">
                        <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                        <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                        <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sekolah_asal" class="form-label">Sekolah Asal:</label>
                    <input type="text" name="sekolah_asal" class="form-control" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto:</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" name="simpan" class="btn btn-primary" />
                </div>

            </fieldset>

        </form>

    </div>
</body>
</html>

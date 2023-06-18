<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <a href="http://localhost/learn_php/index.php">Home</a>
        <header class="text-center mb-4">
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </header>

        <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <textarea class="form-control" name="alamat"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                            <label class="form-check-label" for="laki-laki">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama:</label>
                        <select class="form-select" name="agama">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Atheis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sekolah_asal" class="form-label">Sekolah Asal:</label>
                        <input type="text" class="form-control" name="sekolah_asal" placeholder="Nama Sekolah">
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto:</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Daftar" name="daftar" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-wtTqgajvz6TWol6vqmvY/4B9gAfroG1t7LntkJwvE5osizYOsADsdlDjcfbAIqLN" crossorigin="anonymous"></script>
</body>
</html>

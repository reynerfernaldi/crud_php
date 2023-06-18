<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center mt-5">
        <header>
            <h1 class="display-4">SMK Coding</h1>
            <h3>Pendaftaran Siswa Baru</h3>
        </header>
        <br><br><br>
        <h4>Menu</h4>
        <nav class="mt-4">
            <ul class="list-unstyled">
                <li class="mb-2"><a href="form-daftar.php" class="btn btn-primary">Daftar Baru</a></li>
                <li><a href="list-siswa.php" class="btn btn-secondary">Pendaftar</a></li>
            </ul>
        </nav>
        <?php if(isset($_GET['status'])): ?>
        <div class="mt-4">
            <p class="alert alert-<?php echo ($_GET['status'] == 'sukses') ? 'success' : 'danger'; ?>">
                <?php echo ($_GET['status'] == 'sukses') ? 'Pendaftaran siswa baru berhasil!' : 'Pendaftaran gagal!'; ?>
            </p>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>

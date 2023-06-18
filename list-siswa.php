<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
    <a href="http://localhost/learn_php/index.php">Home</a>
        <header>
            <h3>Siswa yang sudah mendaftar</h3>
        </header>

        <nav class="my-3">
            <a href="form-daftar.php" class="btn btn-primary">[+] Tambah Baru</a>
            <a href="unduh-pdf.php" class="btn btn-secondary">Unduh PDF</a>
        </nav>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Foto</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$siswa['id']."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";
                    echo "<td><img src='img/".$siswa['foto']."' width='80' height='80' class='img-thumbnail'></td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn btn-sm btn-primary'>Edit</a> ";
                    echo "<a href='hapus.php?id=".$siswa['id']."' class='btn btn-sm btn-danger'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</body>
</html>

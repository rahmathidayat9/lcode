<?php 
    require "koneksi.php";

    // query
    $data = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lcode</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        LCODE
        </a>
    </div>
    </nav>

    <div class="container mt-5">
        <a href="insert.php">TAMBAH</a>
        <table class="table">
            <tr>
                <td>Nama</td>
                <td>Kelas</td>
                <td>Umur</td>
                <td>Aksi</td>
            </tr>

            <?php while($fetch = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?= $fetch['nama'] ?></td>
                <td><?= $fetch['kelas'] ?></td>         
                <td><?= $fetch['umur'] ?></td>         
                <td>
                    <a href="edit.php?id=<?php echo $fetch['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="hapus.php?id=<?= $fetch['id'] ?>" class="btn btn-danger">Hapus</a>
                </td>         
            </tr>
            <?php } ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
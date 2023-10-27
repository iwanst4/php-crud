<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Aweshome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Belajar CRUD</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            CRUD dengan PHP
          </a>
        </div>
    </nav>
    <div class="container-fluid">
        <h1>Data Siswa :</h1>
        <figure>
            <blockquote class="blockquote">
            <p>Semua data siswa yang telah diinput dalam database.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
            CRUD <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>
        <a href="kelola.php" type="button" class="btn btn-primary mb-3">
            <i class="fa fa-plus"></i>
            Tambah Data
        </a>
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
              <thead>
                <tr>
                    <th><center>NO</center></th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Foto</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td><center>1</center></td>
                    <td>NISN</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>
                        <img src="img/img1.png" style="width: 150px;">
                    </td>
                    <td>Alamat</td>
                    <td>
                        <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="proses.php?hapus=1" type="button" class="btn btn-danger btn-sm">
                            <i fa class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</body>
</html>
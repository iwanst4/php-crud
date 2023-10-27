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
    <nav class="navbar bg-body-tertiary mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            CRUD dengan PHP
          </a>
        </div>
    </nav>
    <div class="container">
        <form action="proses.php" method="post">
          <div class="mb-3 row">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
              <div class="col-sm-10">
                <input type="text" id="nisn" class="form-control" placeholder="Ex: 00112233">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" id="nama" class="form-control" placeholder="Ex: Muhammad Abdulloh">
            </div>
          </div>
          <div class="mb-3 row">
              <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <select id="jkel" class="form-select form-select-sm">
                  <option selected>Jenis Kelamin</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
              <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
              <input class="form-control" type="file" id="foto">
            </div>
          </div>
          <div class="mb-3 row">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="alamat" rows="3"></textarea>
            </div>
          </div>
          <div class="mb-3 row">
              <div class="col">
                  <?php if(isset($_GET["ubah"])) { ?>
                    <button type="submit" name="aksi" value="edit"  class="btn btn-primary">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        Simpan Perubahan
                    </button>
                  <?php } else { ?>
                    <button type="submit" name="aksi" value="add" class="btn btn-primary">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        Tambah
                    </button>
                  <?php }; ?>
                  <a href="index.php" type="button" class="btn btn-danger">
                      <i class="fa fa-reply" aria-hidden="true"></i>
                      Batal
                  </a>
              </div>
          </div>
        </form>
    </div>
</body>
</html>
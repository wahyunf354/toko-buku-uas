<?php include "../layouts/header.php" ?>
<?php include "../layouts/sidebar.php" ?>
<?php include "../layouts/navbar.php" ?>



<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Kategori</h1>
  </div>
  <?php
  include "../functions/kategori.php";


  if (isset($_POST['submit'])) {
    if (createKategori($_POST)) {
      echo "<div class='alert alert-success' role='alert'>
              Berhasil menambahkan data
            </div>";
    } else {
      echo "<div class='alert alert-danger' role='alert'>
              Gagal menambahkan data
            </div>";
    }
  }
  ?>
  <!-- Content Row -->
  <div class="row">
    <div class="col-12">
      <form action="" method="post">
        <div class="mb-3">
          <label for="nama_kategori" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Masukan nama...">
        </div>
        <button class="btn btn-info" type="submit" name="submit">Simpan</button>
      </form>
    </div>
  </div>


</div>

<?php include "../layouts/footer.php" ?>
<?php include "../layouts/header.php" ?>
<?php include "../layouts/sidebar.php" ?>
<?php include "../layouts/navbar.php" ?>



<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Kategori</h1>
  </div>
  <?php
  include "../functions/kategori.php";
  if (isset($_GET['id'])) {
    $category = getCategoryById($_GET['id']);
  }

  if (isset($_POST['submit'])) {
    if (updateKategori($_POST)) {
      echo "<div class='alert alert-success' role='alert'>
              Berhasil mengubah data
            </div>";
      header('Location: /toko-buku-uas/kategori');
      exit();
    } else {
      echo "<div class='alert alert-danger' role='alert'>
              Gagal mengubah data
            </div>";
    }
  }
  ?>
  <!-- Content Row -->
  <div class="row">
    <div class="col-12">
      <form action="" method="post">
        <input type="hidden" name="kategori_id" value="<?= $category['kategori_id']; ?>">
        <div class="mb-3">
          <label for="nama_kategori" class="form-label">Nama</label>
          <input type="text" class="form-control" value="<?= $category['nama_kategori']; ?>" name="nama_kategori" id="nama_kategori" placeholder="Masukan nama...">
        </div>
        <button class="btn btn-info" type="submit" name="submit">Simpan</button>
      </form>
    </div>
  </div>


</div>

<?php include "../layouts/footer.php" ?>
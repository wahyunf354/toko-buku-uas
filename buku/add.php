<?php include "../layouts/header.php" ?>
<?php include "../layouts/sidebar.php" ?>
<?php include "../layouts/navbar.php" ?>



<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Buku</h1>
  </div>
  <?php
  include "../functions/kategori.php";
  include "../functions/buku.php";

  $categories = getAllCategories();

  if (isset($_POST['submit'])) {
    if (createBook($_POST)) {
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
          <label for="judul_buku" class="form-label">Judul</label>
          <input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Masukan judul...">
        </div>
        <div class="mb-3">
          <label for="pengarang" class="form-label">Pengarang</label>
          <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Masukan nama pengarang...">
        </div>
        <div class="mb-3">
          <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
          <input type="number" min="1901" max="2155" pattern="[0-9]{4}" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="Masukan tahun terbit...">
        </div>
        <div class="mb-3">
          <label for="kategori_id" class="form-label">Kategori</label>
          <select class="custom-select custom-select-md" id="kategori_id" name="kategori_id" aria-label="Default select example">
            <option selected>Pilih kategori...</option>
            <?php foreach ($categories as $category) : ?>
              <option value="<?= $category['kategori_id']; ?>"><?= $category['nama_kategori']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <button class="btn btn-info" type="submit" name="submit">Simpan</button>
      </form>
    </div>
  </div>


</div>

<?php include "../layouts/footer.php" ?>
<?php include "../layouts/header.php" ?>
<?php include "../layouts/sidebar.php" ?>
<?php include "../layouts/navbar.php" ?>

<?php
include "../functions/buku.php";
$books = getAllBooks();

?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Buku</h1>
    <a class="btn btn-sm btn-primary px-2" href="add.php">Tambah Buku</a>
  </div>


  <!-- Content Row -->
  <div class="row">

    <?php foreach ($books as $book) : ?>
      <div class="col-md-3 col-12">
        <div class="card">
          <img src="/toko-buku-uas/assets/img/<?= $book['url']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title text-dark"><?= $book['judul_buku']; ?></h4>
            <p class="card-text text-dark"><?= $book['pengarang']; ?>, <?= $book['tahun_terbit'] ?></p>
            <p class="card-text text-muted"><?= $book['nama_kategori']; ?></p>
            <a href="#" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>

</div>
<!-- /.container-fluid -->

<?php include "../layouts/footer.php" ?>
<?php include "../layouts/header.php" ?>
<?php include "../layouts/sidebar.php" ?>
<?php include "../layouts/navbar.php" ?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
    <a class="btn btn-sm btn-primary px-2" href="add.php">Tambah kategori</a>
  </div>

  <?php
  include "../functions/kategori.php";
  $categories = getAllCategories();

  ?>

  <!-- Content Row -->
  <div class="row">

    <?php foreach ($categories as $category) : ?>
      <div class="col-md-3 col-12">
        <div class="card">
          <div class="card-body"><?= $category['nama_kategori']; ?></div>
          <div class="card-text mb-2 ml-2 d-flex">
            <a href="edit.php?id=<?= $category['kategori_id']; ?>" class="btn btn-light mr-2">
              <i class="far fa-edit text-warning"></i>
            </a>
            <a href="delete.php?id=<?= $category['kategori_id']; ?>" class="btn btn-light mr-2">
              <i class="fas fa-trash text-danger"></i>
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>

</div>
<!-- /.container-fluid -->

<?php include "../layouts/footer.php" ?>
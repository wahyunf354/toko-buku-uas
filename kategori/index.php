<?php include "../layouts/header.php" ?>
<?php include "../layouts/sidebar.php" ?>
<?php include "../layouts/navbar.php" ?>

<?php
include "../functions/kategori.php";
$categories = getAllCategories();

?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <?php foreach ($categories as $category) : ?>
      <div class="col-md-3 col-12">
        <div class="card">
          <div class="card-body"><?= $category['nama_kategori']; ?></div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>

</div>
<!-- /.container-fluid -->

<?php include "../layouts/footer.php" ?>
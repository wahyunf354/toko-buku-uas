<?php include "../layouts/header.php" ?>
<?php include "../layouts/sidebar.php" ?>
<?php include "../layouts/navbar.php" ?>

<?php
include "../functions/buku.php";
$books = getAllBooks();
if (isset($_POST['upload'])) {
  if (addGambar($_POST)) {
    echo "<div class='alert alert-success' role='alert'>
          Gambar berhasil diunggah
        </div>";
  } else {
    echo "<div class='alert alert-danger' role='alert'>
          Gambar gagal diunggah
        </div>";
  }
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Buku</h1>
    <a class="btn btn-sm btn-info px-2" href="add.php">Tambah Buku</a>
  </div>


  <!-- Content Row -->
  <div class="row">

    <?php foreach ($books as $book) : ?>
      <div class="col-md-3 col-12">
        <div class="card">
          <img src="<?= $book['url'] ? $book['url'] : "/toko-buku-uas/assets/img/book.jpeg" ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title text-dark"><?= $book['judul_buku']; ?></h4>
            <p class="card-text text-dark"><?= $book['pengarang']; ?>, <?= $book['tahun_terbit'] ?></p>
            <p class="card-text text-muted"><?= $book['nama_kategori']; ?></p>
            <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#gambar-bukuphpp<?= $book['buku_id'] ?>">
              <i class="fas fa-camera"></i>
            </a>
            <a href="edit.php?id=<?= $book['buku_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="delete.php?id=<?= $book['buku_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="gambar-bukuphpp<?= $book['buku_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Unggah Gambar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
              <input type="hidden" name="buku_id" value="<?= $book['buku_id'] ?>">
              <div class="modal-body">
                <div class="mb-3">
                  <label for="url<?= $book['buku_id'] ?>" class="form-label">Gambar</label>
                  <input type="text" class="form-control" name="url" id="url<?= $book['buku_id'] ?>">
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="upload" class="btn btn-info">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>

</div>
<!-- /.container-fluid -->

<?php include "../layouts/footer.php" ?>
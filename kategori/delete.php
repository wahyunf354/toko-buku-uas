<?php
include "../functions/kategori.php";

if (isset($_GET['id'])) {
  if (deleteKategori($_GET['id'])) {
    header('Location: /toko-buku-uas/kategori');
    exit();
  } else {
    header('Location: /toko-buku-uas/kategori');
    exit();
  }
}

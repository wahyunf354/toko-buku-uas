<?php
include "../functions/buku.php";

if (isset($_GET['id'])) {
  if (deleteBuku($_GET['id'])) {
    header('Location: index.php');
    exit();
  } else {
    header('Location: index.php');
    exit();
  }
}

<?php
include "../config/connection.php";

function getAllCategories()
{
  global $conn;
  $query = "SELECT * FROM tb_kategori";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function getCategoryById($id)
{
  global $conn;
  $query = "SELECT * FROM tb_kategori WHERE kategori_id=$id";

  $result = mysqli_query($conn, $query);
  return mysqli_fetch_assoc($result);
}

function createKategori($data)
{
  global $conn;

  $nama_kategori = $data['nama_kategori'];
  $query = "INSERT INTO tb_kategori(nama_kategori) VALUES ('$nama_kategori')";

  mysqli_query($conn, $query);

  if (mysqli_affected_rows($conn) > 0) {
    return true;
  } else {
    return false;
  }
}

function updateKategori($data)
{
  global $conn;
  $nama_kategori = $data['nama_kategori'];
  $kategori_id = $data['kategori_id'];

  $query = "UPDATE tb_kategori SET nama_kategori='$nama_kategori' WHERE kategori_id='$kategori_id';";


  mysqli_query($conn, $query);

  if (mysqli_affected_rows($conn) > 0) {
    return true;
  } else {
    return false;
  }
}

function deleteKategori($id)
{
  global $conn;

  $query = "DELETE FROM tb_kategori WHERE kategori_id=$id";

  mysqli_query($conn, $query);

  if (mysqli_affected_rows($conn) > 0) {
    return true;
  } else {
    return false;
  }
}

<?php
include "../config/connection.php";

function getAllBooks()
{
  global $conn;

  $query = "SELECT 
            tb_buku.judul_buku, 
            tb_buku.pengarang, 
            tb_buku.tahun_terbit, 
            tb_buku.buku_id, 
            tb_gambar.url,
            tb_kategori.nama_kategori
            FROM tb_buku INNER JOIN tb_kategori ON tb_buku.kategori_id=tb_kategori.kategori_id 
            LEFT JOIN tb_gambar ON tb_buku.buku_id=tb_gambar.buku_id;";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function getBookById($id)
{
  global $conn;

  $query = "SELECT 
            tb_buku.judul_buku, 
            tb_buku.pengarang, 
            tb_buku.tahun_terbit, 
            tb_buku.buku_id, 
            tb_buku.kategori_id, 
            tb_kategori.nama_kategori
            FROM tb_buku INNER JOIN tb_kategori ON tb_buku.kategori_id=tb_kategori.kategori_id
            WHERE buku_id=$id";

  $result = mysqli_query($conn, $query);
  return mysqli_fetch_assoc($result);
}

function createBook($data)
{
  global $conn;

  $judul_buku = htmlspecialchars($data['judul_buku']);
  $pengarang = htmlspecialchars($data['pengarang']);
  $tahun_terbit = $data['tahun_terbit'];
  $kategori_id = htmlspecialchars($data['kategori_id']);

  $query = "INSERT INTO tb_buku(judul_buku, pengarang, tahun_terbit, kategori_id) 
            VALUES ('$judul_buku', '$pengarang', $tahun_terbit, '$kategori_id')";

  mysqli_query($conn, $query);

  if (mysqli_affected_rows($conn) > 0) {
    return true;
  } else {
    return false;
  }
}

function updateBook($data)
{
  global $conn;
  $buku_id = $data['buku_id'];
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $pengarang = htmlspecialchars($data['pengarang']);
  $tahun_terbit = $data['tahun_terbit'];
  $kategori_id = htmlspecialchars($data['kategori_id']);

  $query = "UPDATE tb_buku SET judul_buku='$judul_buku', pengarang='$pengarang', tahun_terbit=$tahun_terbit, kategori_id='$kategori_id' WHERE buku_id=$buku_id";

  mysqli_query($conn, $query);

  if (mysqli_affected_rows($conn) > 0) {
    return true;
  } else {
    return false;
  }
}

function deleteBuku($id)
{
  global $conn;

  $query1 = "DELETE FROM tb_buku WHERE buku_id=$id";
  mysqli_query($conn, $query1);

  if (mysqli_affected_rows($conn) > 0) {
    return true;
  } else {
    return false;
  }
}

function addGambar($data)
{
  global $conn;
  $url = $data['url'];
  $buku_id = $data['buku_id'];

  $query = "INSERT INTO tb_gambar(`url`, buku_id) VALUE ('$url', $buku_id);";

  mysqli_query($conn, $query);

  if (mysqli_affected_rows($conn) > 0) {
    return true;
  } else {
    return false;
  }
}

function getCountBook()
{
  global $conn;

  $query = "SELECT COUNT(*) FROM tb_buku";
  $result = mysqli_query($conn, $query);
  return mysqli_fetch_array($result)[0];
}

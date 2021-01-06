<?php
include "../config/connection.php";

function getAllBooks()
{
  global $conn;

  $query = "SELECT tb_buku.judul_buku, tb_buku.pengarang, tb_buku.tahun_terbit, tb_buku.buku_id, tb_kategori.nama_kategori, tb_gambar.url 
            FROM tb_buku INNER JOIN tb_kategori ON tb_buku.kategori_id=tb_kategori.kategori_id
            INNER JOIN tb_gambar ON tb_buku.buku_id=tb_gambar.buku_id;";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function createBook()
{
  global $conn;
}

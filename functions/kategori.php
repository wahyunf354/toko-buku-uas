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

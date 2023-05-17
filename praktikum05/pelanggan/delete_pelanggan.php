<?php 
require_once "dbkoneksi.php";

// simpan data iddel
$delete = $_GET["iddel"];
// bikin query sql
$sql = "DELETE FROM pelanggan WHERE id=?";
// siapin query
$st = $dbh->prepare($sql);
// eksekusi query
$st->execute([$delete]);

header('location:list_pelanggan.php');
?>
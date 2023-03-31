<?php
require_once "dbkoneksi.php";
$id = $_GET['iddel'];
$sql = "DELETE FROM Pelanggan WHERE id = ?";
$statement = $dbh->prepare($sql); 
$statement->execute([$id]);

header("location:list_pelanggan.php");
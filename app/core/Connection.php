<?php 
session_start();
$host = "localhost";
$username = "root";
$password = "";
$dbName = "aplikasi_spp2023";


$conn = new Mysqli($host,$username,$password,$dbName);

if ($conn->connect_error) {
	die("Koneksi ke database error");
}
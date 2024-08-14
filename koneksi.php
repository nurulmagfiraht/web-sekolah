<?php

$host = "localhost";
$user = "root";
$password = "ilham";
$db = "web-sekolah";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon) {
	die("Koneksi gagal:" . mysqli_connect_error());
}

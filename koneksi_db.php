<?php
$connection = mysqli_connect("localhost", "root", "samuelgamas12", "academic_data_management");

if ($connection) {
	echo "Sukses terhubung ke MySQL";
} else {
	echo "Gagal terhubung ke MySQL" . PHP_EOL;
}
?>
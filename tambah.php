<?php
session_start();
require 'connect.php';

$Promo=$_POST['SosialMedia'];
$Afiliasi=$_POST['Afiliasi'];
$Pengeluaran=$_POST['Pengeluaran'];
$Pemasukan=$_POST['Pemasukan'];

$query=mysqli_query($conn, "
    INSERT INTO tbl_promosi VALUES('','$Promo','$Afiliasi','$Pengeluaran','$Pemasukan');
    ");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Tambah Data Berhasil.");
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("Terdapat Kesalahan Saat Memasukkan Data.");
    <?php
}
header('location: danahosting.php');
?>
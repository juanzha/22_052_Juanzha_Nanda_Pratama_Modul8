<?php 
// koneksi database
include 'conect.php';
if (isset($_POST['kirim'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $nama1 = $_POST['nama1'];
    $status = $_POST['st'];
    $ket = $_POST['keterangan'];
    if ($nim == ''||$nama ==''||$nama1==''||$status==''||$ket==''){
       echo "Data kosong !. Harap mengulangi pengisian data.";
    }else{
    // menginput data ke database
    mysqli_query($conect,"INSERT INTO tbl_mhs2 VALUES
    ('','$nim','$nama','$nama1','$status','$ket')");
    // mengalihkan halaman kembali ke index.php
    header("location:juanzha_nanda_pratama_UTS.php");
    }
}
?>
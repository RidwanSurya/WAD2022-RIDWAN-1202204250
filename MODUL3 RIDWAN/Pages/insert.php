<?php

include('..\config\connector.php');


if (isset($_POST['submit'])){
    $idMobil = rand();
    $NamaMobil = $_POST['NamaMobil'];
    $namaPemilik = $_POST['namaPemilik'];
    $merk = $_POST['merk'];
    $tglBeli = $_POST['TanggalBeli'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES["foto"]["name"];
    $temp = $_FILES["foto"]["tmp_name"];
    $folder = "../asset/images/" . $foto;
    move_uploaded_file($temp, '../Asset/image/'.$foto);
    $pembayaran = $_POST['pembayaran'];

    $query = mysqli_query($connect, "INSERT INTO showroom_ridwan_table(id_mobil,nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
    VALUES('$idMobil','$NamaMobil','$namaPemilik','$merk','$tglBeli','$deskripsi','$foto','$pembayaran')");

    if ($query){
        header('Location: ..\pages\Add-Ridwan.php');
    }
}
?>
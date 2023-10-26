<?php
if(isset($_POST['update'])){
    include_once "koneksi.php";
    $nama          = $_POST['nama'];
    $alamat    = $_POST['alamat'];
    $kontak       = $_POST['kontak'];

    $sql= "UPDATE supplier SET nama='$nama', alamat='$alamat', kontak='$kontak' WHERE id= '$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location: index.php?m=supplier');
    } else {
        include 'index.php?m=supplier';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal ditambahkan")';
        echo '<script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
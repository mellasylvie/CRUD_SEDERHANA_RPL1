<?php
require 'functions.php';

$id = $_GET['id'];
if(hapus_barang($id) > 0){
    echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'data_barang.php';
    </script>";
} else {
    echo"<script>
        alert('data gagal dihapus');
        document.location.href = 'data_barang.php';
    </script>";
}
?>
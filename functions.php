<?php
//Function untuk koneksi db
function koneksi() {
    $conn = mysqli_connect("localhost","root","","penjualan");
    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah_barang($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $id_supplier = $data['id_supplier'];

    $sql = "INSERT INTO barang VALUES (null, '$nama', '$harga', '$stok', '$id_supplier')";

    mysqli_query($conn, $sql);
    
    return mysqli_affected_rows($conn);
}

function hapus_barang($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM barang WHERE id_barang = $id");

    return mysqli_affected_rows($conn);
}

function ubah_barang($data){
    $conn = koneksi();

    $id = $data['id'];
    $nama = $data['nama'];
    $harga  = $data['harga'];
    $stok = $data['stok'];
    $id_supplier = $data['id_supplier'];

    $sql = "UPDATE barang SET nama_barang = '$nama',
                              harga = '$harga',
                              stok = '$stok',
                              id_supplier = '$id_supplier'
            WHERE id_barang = $id";
    
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function tambah_pembeli($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $gender = $data['gender'];
    $telpon = $data['no_telp'];

    $sql = "INSERT INTO pembeli VALUES (null, '$nama', '$gender', '$telpon')";

    mysqli_query($conn, $sql);
    
    return mysqli_affected_rows($conn);
}

function hapus_pembeli($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli = $id");

    return mysqli_affected_rows($conn);
}
?>
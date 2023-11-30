<?php
require 'functions.php';
$supplier = query("SELECT * FROM supplier");
if (isset($_POST['tambah'])){
    if(tambah_barang($_POST) > 0){
        echo "<script>
        alert('Data Berhasil ditambahkan');
        document.location.href='data_barang.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal ditambahkan');
        document.location.href='data_barang.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Barang</title>
</head>
<body>
    <h1>Tambah Data Barang</h1>
    <form action="" method="post">
        <div>
            <label for="nama">Nama Barang:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="harga">Harga Barang:</label>
            <input type="number" name="harga" id="harga" required>
        </div>
        <div>
            <label for="stok">Stok Barang:</label>
            <input type="number" name="stok" id="stok" required>
        </div>
        <div>
            <label for="id_supplier">ID Supplier :</label>
                <select name="id_supplier" id="id_supplier" required>
                    <?php foreach ($supplier as $s) : ?>
                        <option value="<?php echo $s['id_supplier']; ?>"><?php echo $s['nama_supplier']; ?></option>
                    <?php endforeach; ?>
                </select>
        </div>
        <button type="submit" name="tambah">Tambah Data</button>
    </form>
</body>
</html>
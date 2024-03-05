<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <h2>Form Belanja</h2>
    <hr>

    <div class="row mx-5">
        <div class="col-12 col-md-8">
            <form action="#" method="POST">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                        <input id="customer" name="customer" type="text" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required">
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required">
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required">
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-12 col-md-4">
            <ul class="list-group">
                <li class="list-group-item active">Daftar Harga</li>
                <li class="list-group-item">TV: 4.200.000</li>
                <li class="list-group-item">Kulkas: 3.100.000</li>
                <li class="list-group-item">Mesin Cuci: 3.800.000</li>
                <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
            </ul>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['customer']) && isset ($_POST['produk'])&& isset ($_POST['jumlah']))
{
$nama = $_POST['customer'];
$product = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// Daftar harga produk
$harga_tv = 4200000;
$harga_kulkas = 3200000;
$harga_mesin_cuci = 3800000;

// Menghitung total harga berdasarkan produk yang dipilih
if ($product === 'TV') {
    $total_harga = $jumlah * $harga_tv;
} elseif ($product === 'Kulkas') {
    $total_harga = $jumlah * $harga_kulkas;
} elseif ($product === 'Mesin Cuci') {
    $total_harga = $jumlah * $harga_mesin_cuci;
} else {
    $total_harga = 0; // Default jika produk tidak valid
}

// Menampilkan hasil
echo '<h2>Hasil Belanja Online</h2>';
echo 'Nama Customer: ' . $nama . '<br>';
echo 'Produk Pilihan: ' . $product . '<br>';
echo 'Jumlah Barang: ' . $jumlah . '<br>';
echo 'Total Harga: Rp ' . number_format($total_harga, 0, ',','.');
}
?>

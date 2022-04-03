<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Toko Makmur Sentosa</title>
</head>

<body class="bg-success">
    <div class="container bg-white">
        <div id="header" class="ms-2">
            <h1 id="logo">Toko Makmur Sentosa</h1>
            <p id="tanggal"><?php echo date("d M Y"); ?></p>
        </div>
        <hr>
        <nav class="navbar navbar-expand navbar-light bg-light p-0 m-0">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="./tampil_barang.php">Data Barang</a>
                <a class="nav-item nav-link active" href="">Data Distributor</a>
                <a class="nav-item nav-link active" href="">Data Barang Masuk</a>
                <a class="nav-item nav-link active" href="">Data Barang Keluar</a>
                <a class="nav-item nav-link active" href="./logout.php"
                    onclick="return confirm('Yakin ingin keluar?')">Logout</a>
            </div>
        </nav>
        <hr>
        <div class="text-center pb-4">
            <h2>Tambah Data Barang</h2>
        </div>
        <div class="row mb-2">
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Barang</label>
                        <input type="text" class="form-control" id="" placeholder="Masukkan Kode Barang">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="" placeholder="Masukkan Nama Barang">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Stok Barang</label>
                        <input type="text" class="form-control" id="" placeholder="Masukkan Stok Barang">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Harga Barang</label>
                        <input type="text" class="form-control" id="" placeholder="Masukkan Harga Barang">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Distributor</label>
                        <input type="text" class="form-control" id="" placeholder="Masukkan Distributor">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Keterangan Barang</label>
                        <textarea class="form-control" id="" rows="2"></textarea>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col">
                    <button type="submit" name="submit" class="btn btn-success px-3 mb-3 float-start">Tambahkan</button>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-center">
                    Copyright &copy; <?= date("Y"); ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
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
        <nav class="navbar navbar-expand navbar-dark bg-success p-0 m-0">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="">Data Barang</a>
                <a class="nav-item nav-link active" href="">Data Distributor</a>
                <a class="nav-item nav-link active" href="">Data Barang Masuk</a>
                <a class="nav-item nav-link active" href="">Data Barang Keluar</a>
                <a class="nav-item nav-link active" href="./logout.php"
                    onclick="return confirm('Yakin ingin keluar?')">Logout</a>
            </div>
        </nav>
        <hr>
        <div class="text-center pb-4">
            <h2>Data Barang</h2>
        </div>
        <div class="row mb-2">
            <div class="col-md-8 col-sm-12 pb-3">
                <div class="btn-group pb-1" role="group" aria-label="Basic example">
                    <a href="./tambah_barang.php" class="btn btn-outline-success btn-sm text-black">Tambah Data</a>
                    <a href="./tampil_mahasiswa.php" class="btn btn-outline-success btn-sm text-black">Refresh</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <form id="search" action="tampil_barang.php" method="get">
                    <div class="form-group" style="padding-left: 100px;">
                        <input type="text" name="nama" id="nama" placeholder="Search..." class="border border-success">
                        <input type="submit" name="submit" value="Search" class="border border-success">
                    </div>
                </form>
            </div>
            <div class="row align-items-start">
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-hover table-sm">
                        <thead class="text-white bg-success">
                            <tr class="border border-dark text-center">
                                <th>No</th>
                                <th>Foto</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal lahir</th>
                                <th>Fakultas</th>
                                <th>Jurusan</th>
                                <th>IPK</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>s</td>
                            <td>s</td>
                            <td>s</td>
                            <td>s</td>
                            <td>s</td>
                            <td>s</td>
                            <td>s</td>
                            <td>s</td>
                            <td>s</td>
                            <td>s</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-center">
                Copyright &copy; <?= date("Y"); ?>
            </div>
        </div>
    </div>

</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
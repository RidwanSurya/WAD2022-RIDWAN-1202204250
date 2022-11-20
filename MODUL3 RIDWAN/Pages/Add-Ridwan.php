<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" href="../index.php">Home</a>
            <a class="nav-link active" href="#">MyCar</a>
        </div>
        </div>
    </div>
    </nav>

    <br>
<!-- Text -->
    <div class="container px-4 text-center">
        <div class="row gx-5">
            <div class="col">
                <div align="left"><h3>Tambah Mobil</h3></div>
            </div>
        </div>
    </div>
    <div class="container px-4 text-start">
        <div class="row gx-5">
            <div class="col">
                <div align="left">Tambah Mobil Baru Ke Wishlist Anda</div></br>
            </div>
<!-- FORM -->
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="NamaMobil" class="form-label">Nama Mobil</label>
                    <input type="Text" class="form-control" id="NamaMobil" name="NamaMobil" aria-describedby="TextHelp">
                </div>
                <div class="mb-3">
                    <label for="NamaMobil" class="form-label">Nama Pemilik</label>
                    <input type="Text" class="form-control" id="NamaMobil" name="namaPemilik"aria-describedby="TextHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Merk</label>
                    <input type="Text" class="form-control" id="exampleInputText1" name="merk" aria-describedby="TextHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Beli</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="TanggalBeli">
                </div>
                <div class="mb-3">
                    <label for="NamaMobil" class="form-label">Deskripsi</label>
                    <input type="Text" class="form-control" id="NamaMobil" aria-describedby="TextHelp" name="deskripsi">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Foto</label>
                    <input type="File" class="form-control" id="exampleInputPassword1" name="foto">
                    </br>
                <p>Status Pembayaran</p>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"id="inlineRadio1" value="option1" name="pembayaran">
                <label class="form-check-label" for="inlineRadio1" for="pembayaran">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio2" value="option2" name="pembayaran">
                <label class="form-check-label" for="inlineRadio2" for"pembayaran">Belum Lunas</label></br>
                </div>
                </br>
                </br>
                <button type="submit" class="btn btn-primary" role="button" name="submit">Selesai</button>
                </form> 
        </div>
    </div>
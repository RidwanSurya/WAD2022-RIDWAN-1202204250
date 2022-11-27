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
            <div class="navbar-nav navbar-dark">
                <a class="nav-link active" href="../index.php">Home</a>
                <a class="nav-link active" href="../pages/Add-Ridwan.php">MyCar</a>
            </div>
            </div>
        </div>
    </nav>
</br>
<!-- Grid -->
    <div class="container text-center">
        <div class="row">
            <h3 align="left">BMW M3 Competition</h3>
            <p align="left">Detail mobil BMW M3 Competition</p>
<!-- Kanan -->
            <div class="col"></br></br></br></br>
                <img src="../Asset/Image/bmw.jpg" align="left"class="rounded mx-auto d-block" alt="bmw" height="300" width="Automatic">
            </div>
<!-- Kiri -->
            <div class="col" align="left">
            <form>
                <div class="mb-2">
                    <label for="NamaMobil" class="form-label">Nama Mobil</label>
                    <input type="email" class="form-control" id="NamaMobil" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Pemilik</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Merk</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Beli</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Foto</label>
                    <input type="File" class="form-control" id="exampleInputPassword1">
                    </br>
                <p>Status Pembayaran</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Belum Lunas</label></br>
                </div></br>
                </br>
                <a class="btn btn-primary" href="../pages/Edit-Ridwan.php" role="button">Edit</a>
                </form> 
                </div>
            </div>
        </div>
    </div>

</body>
</html>
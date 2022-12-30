<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
<?php
    includ('..\config\connector.php');
    $query = mysqli_query($connect,"SELECT id_mobil FROM `showroom_ridwan_table`");
    $jumlah = mysqli_num_rows($query);
    $ambil = mysqli_query($connect, "SELECT * FROM `showroom_ridwan_table`");
  ?>
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

<div container
<div class="container">
    <div class="row pt-5">
    <div class="p"><h2>My Show Room</h></div>
    <br>
    <div class="p">List Show Room Ridwan_1202204250</div>
    <br><br>
</br>
<!-- CARD -->
<?php
    while ($isi = mysqli_fetch_array($ambil)){
    ?>
    <br/>
    <div class="container">
    <div class="card" style="width: 18rem;">
    <img src="../asset/images/<?php echo $isi['foto_mobil'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $isi['nama_mobil'];?></h5>
            <p class="card-text"><?= $getDeskripsi = $isi['deskripsi'];
            echo $getDeskripsi;?></p>
            <div class="row">
                <div class="col">
                    <a href="./Detail-Ridwan.php?id_mobil=<?php echo $isi['id_mobil']; ?>" class="btn btn-primary">Detail</a>
                </div>

                <div class="col">
                    <a href="../config/delete.php?id_mobil=<?php echo $isi['id_mobil']; ?>" class="btn btn-danger" name="id_mobil">Delete</a> 
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?php
}
?>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

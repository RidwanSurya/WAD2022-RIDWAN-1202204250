<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
  
    <body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark ">
            <div class="mx-auto d-flex">
                <div class="" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="MODUL2 RIDWAN.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="BOOKING.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <?php
        $name = isset($_GET['nama']) ? $_GET['nama'] : '-';
        $date = isset($_GET['inputTanggal']) ? $_GET['inputTanggal'] : '-';
        $time = isset($_GET['inputTime']) ? $_GET['inputTime'] : '-';
        $duration = isset($_GET['inputdurasi']) ? $_GET['inputdurasi'] : '-';
        $checkout = strtotime($time) + strtotime($duration);
        $car = isset($_GET['inputcar']) ? $_GET['inputcar'] : '-';
        $phone = isset($_GET['inputnumber']) ? $_GET['inputnumber'] : '-';
        $service = isset($_GET['inputservice']) ? $_GET['inputservice'] : '-';
        ?>
    <section id="content">
        <h2 style="text-align:center; margin-top:50px">Thank you RIDWAN_1202204250 for Reserving</h2>
        <p style="text-align:center">Please double check your reservation</p>
        <table class="table">
            <thead>
                <th scope="col">Booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check-in</th>
                <th scope="col">Check-out</th>
                <th scope="col">Car Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Service(s)</th>
                <th scope="col">Total Price</th>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo(rand(0,999999) . "<br>");?></th>
                    <td><?php echo $name ?></td>
                    <td><?php echo $date . " " . $time?></td>
                    <td><?php echo date("H:i", $checkout) ?></td>
                    <td><?php echo $car ?></td>
                    <td><?php echo $phone ?></td>
                    <td><?php echo $service ?></td>
                </tr>
            </tbody>
        </table>
    </section>
    
    <nav class="navbar bg-light">
    <div class="container-fluid">
      <div class="navbar-nav" style="margin-left: auto ; margin-right: auto;">
      <span class="navbar-brand mb-0 h1" align="center">Created by Ridwan Surya Ghani_1202204250</span>
    </div>
    </div>
  </nav>
</body>
</html>
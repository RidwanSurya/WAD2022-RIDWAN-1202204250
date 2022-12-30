<?php 
  include "../config/connector.php";

  
    $id = $_GET["id_mobil"];
    mysqli_query($connect, "UPDATE FROM showroom_ridwan_table WHERE id_mobil = $id");
    header('Location: ..\pages\ListCar-Ridwan.php');
  
    mysqli_query($kon, $query);
  
?>
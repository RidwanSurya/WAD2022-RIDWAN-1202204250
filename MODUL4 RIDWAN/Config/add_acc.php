<?php
    include('connect.php');
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $konfirmasipassword = $_POST['konfirmasipassword'];
    
        if($password==$konfirmasipassword){
            $query= "INSERT INTO user_ridwan (email, nama, no_hp, password)
                    VALUES('$email', '$nama', '$no_hp', '$password')";
            mysqli_query($connect,$query);
            echo "<script>alert('Registrasi Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../Pages/Login-Ridwan.php'>";
        }
        else{
            echo "<script>alert('Registrasi Gagal')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../Pages/Register-Ridwan.php'>";
        }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   //Menampilkan tulisan
   echo "Nis :2233288 <br>";
   echo "Nama : Fatma fatimatuz zahra <br>";
   echo "Alamat :Pangkalan tugu <br>";
   echo "Telepon : 08883907841 <br>";
   echo "Email : fatmafatimatuzzahra66@gmail <br> <br>";

   //Menghitung nilai  pemprogaman web lanjut, gunakan IF dan 
    echo "Nis : 2233288 <br>";
    echo "Nama : Fatma fatimatuz zahra <br>";
    $n_tugas = 70*20/100;
    $n_uts = 80*35/100;
    $n_uas = 83*45/100;
    echo "Nilai tugas :$n_tugas <br>";
    echo "Nilai uts : $n_uts <br>";
    echo "Nilai uas :$n_uas <br>";
    $n_akhir = $n_tugas + $n_uts + $n_uas;
    echo "Nilai Akhir : $n_akhir <br>";

    if ($n_akhir >= 85){
        echo "Nilai huruf :A";
    }elseif ($n_akhir >= 68.5){
        echo "Nilai huruf :B";
    }elseif($n_akhir >= 58.5){
        echo "Nilai huruf :C";
    }elseif($n_akhir >= 40){
        echo "Nilai huruf :D";
    }else{
        echo "Nilai huruf :E";
    }
?>
</body>
</html>
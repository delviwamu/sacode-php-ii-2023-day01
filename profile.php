<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile Page</title>

    <!-- style css -->
    <style>
        body{
            background-color: #16a085;
        }



    </style>


</head>


<body>

    <!-- Heading dengan tag html -->

    <h1>Profile Page</h1>

    <!-- paragraph dengan syntax PHP -->

    <?php

        // Menampilkan string ke layar

        echo "<p>Hello PHP!</p>";

        /*
        Syntax PHP bisa di jalankan
         hanya di dalam dokumen 
         dengan extensi *.php
        */

        # Membuat variabel PHP

        $angka1 = 10;
        $angka2 = 5;

        #penjumlahan
        $jumlah = $angka1 + $angka2;

       // echo $jumlah;

         #pengurangan
        $pengurangan = $angka1 - $angka2;
        //echo $pengurangan;


    ?>

    <h3>Hasil penjumlahan:</h3>
    <p>
        <?php
        echo $jumlah;
        ?>
    </p>

    <h3>Hasil pengurangan:</h3>
    <p>
        <?php
            echo $pengurangan;
        ?>
    </p>
    
</body>
</html>
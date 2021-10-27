<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nilai = $_POST['nilai_1'];
    $nilai = $_POST['nilai_2'];
    $r = $_POST['rumus'];
    ?>
    <h2>Hasil Hitung Rumus</h2>
    <br>
    Nilai 1 adalah = <?php echo "$nilai" ?> <br>
    Nilai 2 adalah = <?php echo "$nilai" ?> <br>

    <?php
    if($nilai1=="0" && $nilai2=="0")
    {echo "Tidak ada hasil perhitungan !!!";}
    else
    {
        if($r=="s")
    }
        $hasil=(0.58 * ($nilai1 * $nilai2));
        echo "Rumus yang dipilih adalah = segitiga 
              Hasil perhitungan rumus = $hasil"
    }
    else
    {
        $hasil = ($nilai * $nilai2);
        echo "Rumus yang dipilih adalah = Persegi Panjang
              "
    }
</body>
</html>
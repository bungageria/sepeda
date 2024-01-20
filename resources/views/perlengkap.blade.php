<?php
$lengkap = "<center>perlengkapan bersepeda</center>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav>
    <ul>
        <a href="/">home</a>
    </ul>
    </nav>

    <h1><?php echo "$lengkap";?></h1>

    <p>Sebelum memulai bersepeda pastikan Riders sudah memiliki beberapa perlengkapan yang menunjang safety dan kenyamanan.
         Ini dia 5 perlengkapan yang sangat penting saat bersepeda</p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Gambar</th>
            <th>Penjelasan</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Helm</td>
            <td><img src="image/helm.png"></td>
            <td>Helm dapat melindungi kepala Riders dari kemungkinan terburuk ketika terjadi kecelakaan saat dijalan. </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jersey Sepeda</td>
            <td><img src="image/baju.jpg"></td>
            <td>Jersey sepeda memiliki kelebihan mampu menyerap sekaligus mengeringkan keringat dengan cepat dibandingkan kaos sehingga menambah kenyamanan Riders saat bersepeda.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Sarung Tangan</td>
            <td><img src="image/sarung.jpg"></td>
            <td>Sarung tangan mampu memberikan perlindungan dari sinar matahari dan permukaan tangan saat terjatuh.</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Botol Minum</td>
            <td><img src="image/btl.png"></td>
            <td>jangan lupa untuk membawa botol minum agar terhindar dari dehidrasi selama perjalanan.</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sepatu Sepeda</td>
            <td><img src="image/sepatu.webp"></td>
            <td>untuk melindungi kaki saat dijalan namun juga menambah kenyamanan saat bersepeda</td>
        </tr>
    </table>
    
</body>
</html>
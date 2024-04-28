<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSKRIP</title>
    <style type="text/css">
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: white;
            /* Menambahkan latar belakang putih jika gambar tidak dimuat */
            background-image: url(../jpg/5570027.jpg);
            /* Gambar latar belakang */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100%;
        }

        /* .footer {
            background-color: #333;
            color: #fff;
            padding: 0px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: calc(100% - -100px);
            box-sizing: border-box;
        } */

        .sidebar {
            background-color: #e6e6fa;
            color: #333;
            width: 200px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar h2 {
            position: relative;
            top: 90px;
            font-size: 30px;
            left: 15px;

        }

        .sidebar li {
            padding: 10px;
            line-height: 30px
        }

        .sidebar a {
            position: relative;
            top: 90px;
            left: 35px;
            color: #333;
            text-decoration: none;
            padding: 10px;
            /* border-bottom: 1px solid #444; */
            line-height: 30px
        }

        .container {
            margin-left: 200px;
            padding: 20px;
            max-height: 100px;
        }


        .header {
            background-color: #d8bfd8;
            color: #333;
            padding: 20px;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
            width: calc(101% - -100px);
            box-sizing: border-box;
        }

        .header h1 {
            margin: 0;
            font-size: 36px;
        }

        .header p {
            margin: 0;
            font-size: 18px;
        }

        .content {
            margin-top: 80px;
            padding: 20px;
        }

        .content h2 {
            margin-top: 0;
            margin-bottom: 0;

        }

        .content p {
            font-size: 16px;
        }

        .sidebar a {
            padding: 10px;
        }

        .sidebar li:last-child a {
            border-bottom: none;
        }

        .sidebar a:hover {
            background-color: #d8bfd8;

        }

        .sidebar h3 {
            margin: 0;
            padding: 10px;
            font-size: 24px;
            font-weight: normal;
            border-bottom: 1px solid #444;
        }

        .sidebar ul {
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            padding: 0;
            margin: 0;
        }

        .sidebar li:last-child {
            border-bottom: none;
        }

        .sidebar a:hover {
            text-decoration: none;
        }

        .sidebar a:focus {
            outline: none;
        }

        .content[id="3"] img {
            max-width: 23%;
            max-height: auto;
        }

        .content[id="4"] img {
            max-width: 23%;
            max-height: auto;
            padding: 45px 25px 15px -26px;
        }

        .content[id="5"] img {
            max-width: 23%;
            max-height: auto;
            padding: 69px 25px 70px 6px;
            margin: -46px 21px -40px -10px;
            /* position: absolute;
            top: 0px;
            left: 40px;
            z-index: 1; */

        }

        .content{
            color:black;
            /* Putih */
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
            /* Bayangan teks hitam */
            margin-top: 80px;
            padding: 20px;
        }

        .content:target {
            scroll-margin-top: 100px;/
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="halaman.php">Beranda</a></li>
            <li><a href="product.php">Produk</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <h1>PUSKRIP ELEKTRONIK</h1>
            <p>Kualitas dan Harga Terbaik</p>
        </div>
        <div class="content">
            <h2>Ini Halaman Detail Produk</h2>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT02w0bziDq1fEXlCEK8A-Uq0cK_KD5B0oKu0epKDqtSA&s">
            <h2>Asus TUF</h2>
            <p>Dipersiapkan dengan daya tahan luar biasa untuk gaming serius, TUF Gaming F15 adalah laptop gaming Windows 10 Home yang dapat membantu Anda untuk meraih kemenangan. Didukung oleh CPU Intel® Core™ i7 Generasi ke-10 terbaru dan GPU GeForce® GTX 1650Ti, gameplay penuh aksi cepat, lancar, dengan dukungan penuh tampilan layar IPS hingga 144Hz. Meskipun memiliki sasis yang lebih kecil dan lebih portabel dari pendahulunya, laptop gaming ini juga dilengkapi baterai 48Wh yang lebih besar untuk masa pakai baterai yang lebih baik. Pendinginan pembersihan mandiri yang efisien berpadu dengan daya tahan kelas militer khas TUF yang teruji dalam pertempuran.</p>
            <b>$20.98</b>
            <br>
            <br>
            <button type="button" onclick="addToChart()">Add to Chart</button>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="content" id="2">
            <h2>Ini Halaman Detail Produk</h2>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgCME3t_5aZpAUtFPhCL0wUwa_O0MDmhm-Js7cFB7ouw&s">
            <h2>Asus ROG</h2>
            <p>Dipersiapkan dengan daya tahan luar biasa untuk gaming serius, TUF Gaming F15 adalah laptop gaming Windows 10 Home yang dapat membantu Anda untuk meraih kemenangan. Didukung oleh CPU Intel® Core™ i7 Generasi ke-10 terbaru dan GPU GeForce® GTX 1650Ti, gameplay penuh aksi cepat, lancar, dengan dukungan penuh tampilan layar IPS hingga 144Hz. Meskipun memiliki sasis yang lebih kecil dan lebih portabel dari pendahulunya, laptop gaming ini juga dilengkapi baterai 48Wh yang lebih besar untuk masa pakai baterai yang lebih baik. Pendinginan pembersihan mandiri yang efisien berpadu dengan daya tahan kelas militer khas TUF yang teruji dalam pertempuran.</p>
            <b>$56.75</b>
            <br>
            <br>
            <button type="button" onclick="addToChart()">Add to Chart</button>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="content" id="3">
            <h2>Ini Halaman Detail Produk</h2>
            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/9/9/7d2c9337-627d-4c6d-affc-8c849381955b.jpg">
            <h2>Legion</h2>
            <p>Dipersiapkan dengan daya tahan luar biasa untuk gaming serius, TUF Gaming F15 adalah laptop gaming Windows 10 Home yang dapat membantu Anda untuk meraih kemenangan. Didukung oleh CPU Intel® Core™ i7 Generasi ke-10 terbaru dan GPU GeForce® GTX 1650Ti, gameplay penuh aksi cepat, lancar, dengan dukungan penuh tampilan layar IPS hingga 144Hz. Meskipun memiliki sasis yang lebih kecil dan lebih portabel dari pendahulunya, laptop gaming ini juga dilengkapi baterai 48Wh yang lebih besar untuk masa pakai baterai yang lebih baik. Pendinginan pembersihan mandiri yang efisien berpadu dengan daya tahan kelas militer khas TUF yang teruji dalam pertempuran.</p>
            <b>$56.75</b>
            <br>
            <br>
            <button type="button" onclick="addToChart()">Add to Chart</button>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="content" id="4">
            <h2>Ini Halaman Detail Produk</h2>
            <img src="https://m.media-amazon.com/images/I/71kBeFDgCkL._AC_UF894,1000_QL80_.jpg">
            <h2>Razer</h2>
            <p>Dipersiapkan dengan daya tahan luar biasa untuk gaming serius, TUF Gaming F15 adalah laptop gaming Windows 10 Home yang dapat membantu Anda untuk meraih kemenangan. Didukung oleh CPU Intel® Core™ i7 Generasi ke-10 terbaru dan GPU GeForce® GTX 1650Ti, gameplay penuh aksi cepat, lancar, dengan dukungan penuh tampilan layar IPS hingga 144Hz. Meskipun memiliki sasis yang lebih kecil dan lebih portabel dari pendahulunya, laptop gaming ini juga dilengkapi baterai 48Wh yang lebih besar untuk masa pakai baterai yang lebih baik. Pendinginan pembersihan mandiri yang efisien berpadu dengan daya tahan kelas militer khas TUF yang teruji dalam pertempuran.</p>
            <b>$76.75</b>
            <br>
            <br>
            <button type="button" onclick="addToChart()">Add to Chart</button>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="content" id="5">
            <h2>Ini Halaman Detail Produk</h2>
            <img src="https://cdn.rri.co.id/berita/1/images/1678146808664-09/1678146808664-09.jpg">
            <h2>Pongo</h2>
            <p>Dipersiapkan dengan daya tahan luar biasa untuk gaming serius, TUF Gaming F15 adalah laptop gaming Windows 10 Home yang dapat membantu Anda untuk meraih kemenangan. Didukung oleh CPU Intel® Core™ i7 Generasi ke-10 terbaru dan GPU GeForce® GTX 1650Ti, gameplay penuh aksi cepat, lancar, dengan dukungan penuh tampilan layar IPS hingga 144Hz. Meskipun memiliki sasis yang lebih kecil dan lebih portabel dari pendahulunya, laptop gaming ini juga dilengkapi baterai 48Wh yang lebih besar untuk masa pakai baterai yang lebih baik. Pendinginan pembersihan mandiri yang efisien berpadu dengan daya tahan kelas militer khas TUF yang teruji dalam pertempuran.</p>
            <b>$46.75</b>
            <br>
            <br>
            <button type="button" onclick="addToChart()">Add to Chart</button>
        </div>
        <!-- <div class="footer">
            <p>Footer</p>
        </div> -->
    </div>



</body>

</html>
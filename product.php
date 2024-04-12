<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style type="text/css">
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0;
            padding: 0;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 0px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: calc(100% - -100px);
            box-sizing: border-box;
        }

        .sidebar {
            background-color: #646161;
            color: #fff;
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
            padding: 0px;
            line-height: 30px;
        }

        .sidebar a {
            position: relative;
            top: 90px;
            left: 35px;
            color: #fff;
            text-decoration: none;
            padding: 10px;
            /* border-bottom: 1px solid #444; */
            line-height: 30px
        }

        .sidebar a:hover {
            background-color: #444;
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

        .sidebar li:last-child {
            border-bottom: none;
        }

        .sidebar a:hover {
            text-decoration: none;
        }

        .sidebar a:focus {
            outline: none;
        }

        .container {
            margin-left: 200px;
            padding: 20px;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
            width: calc(100% - -100px);
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
            margin-top: 60px;
            padding: 20px;
        }

        .content h2 {
            margin: 0px 0px 0px 220px;

        }

        .product-grid {
            margin: 0px 0px 0px 240px;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-gap: 0px;
            background-color: #f8f8f8;
            padding: 10px;
            text-align: center;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .product-item {
            background-color: #f8f8f8;
            padding: 8px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            width: 180px;
            /* Adjust width as needed */
            /* aspect-ratio: 1/1; */
            /* Membuat box berbentuk kotak */
            /* max-height: 180px; */
            /* padding-top: 25%; */
        }
        .product-item a{
            text-decoration: none;
            color: black;
        }   

        .product-item[id="q"] img {
            max-width: 45%;
            height: auto;
            padding-top: 13px;
            padding-bottom: 10px;
            margin-bottom: 18px; 

        }
        .product-item[id="f"] img {
            max-width: 50%;
            height: auto;
            padding-top: 16px;
            padding-bottom: 10px;
            margin-bottom: 20px; 

        }
        .product-item img {
            max-width: 50%;
            height: auto;
            margin-bottom: 16px; 

        }


    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="halaman.php">Beranda</a></li>
            <!-- <li><a href="detail.php">1</a></li> -->
            <li><a href="product.php">Produk</a></li>
            <li><a href="login.php">login</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <h1>PUSKRIP ELEKTRONIK</h1>
            <p>Kualitas dan Harga Terbaik</p>
        </div>
    </div>
    <div class="content">
        <h2>Ini Halaman Produk</h2>
    </div>
    <div class="product-grid">
        <div class="product-item" >
            <a href="detail.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT02w0bziDq1fEXlCEK8A-Uq0cK_KD5B0oKu0epKDqtSA&s"> 
            <h2>ASUS TUF</h2>
            <p> CPU Intel® Core™ i7 Generasi ke-10 terbaru dan GPU GeForce® GTX 1650Ti</p>
            <p class="price">$20.98</p></a>
            <button>Add to Cart</button>
        </div>
        <div class="product-item">
            <a href="detail.php#2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgCME3t_5aZpAUtFPhCL0wUwa_O0MDmhm-Js7cFB7ouw&s">
            <h2>ASUS ROG </h2>
            <p>CPU Intel® Core™ i7 Generasi ke-10 terbaru dan GPU GeForce® GTX 1650Ti</p>
            <p class="price">$56.75</p></a>
            <button>Add to Cart</button>
        </div>
        <div class="product-item">
            <a href="detail.php#3"><img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/9/9/7d2c9337-627d-4c6d-affc-8c849381955b.jpg">
            <h2>LEGION</h2>
            <p>CPU Intel® Core™ i7 Generasi ke-10 terbaru dan GPU GeForce® GTX 1650Ti</p>
            <p class="price">$16.75</p></a>
            <button>Add to Cart</button>
        </div>
        <div class="product-item" id="q">
            <a href="detail.php#4"><img src="https://m.media-amazon.com/images/I/71kBeFDgCkL._AC_UF894,1000_QL80_.jpg">
            <h2>RAZER</h2>
            <p>CPU Intel® Core™ i7 Generasi ke-10 terbaru dan GPU GeForce® GTX 1650Ti</p>
            <p class="price">$76.75</p></a>
            <button>Add to Cart</button>
        </div>
        <div class="product-item" id="f">
            <a href="detail.php#5"><img src="https://cdn.rri.co.id/berita/1/images/1678146808664-09/1678146808664-09.jpg">
            <h2>PONGO</h2>
            <p>CPU Intel® Core™ i7 Generasi ke-10 terbaru dan GPU GeForce® GTX 1650Ti</p>
            <p class="price">$46.75</p></a>
            <button>Add to Cart</button>
    </div>
</body>
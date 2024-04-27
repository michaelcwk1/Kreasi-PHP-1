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
            background-color: white;
            /* Menambahkan latar belakang putih */
            height: 100%;
        }

        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(../jpg/12.jpg);
            background-size: cover;
            background-position: center top;
            background-repeat: no-repeat;
        }

        /* .footer {
            background-color: transparent;
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
        }

        .header {
            background-color: #d8bfd8;
            color: #333;
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
            margin-top: 80px;
            padding: 20px;
        }

        .content h2 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .content table {
            width: 100%;
            border-collapse: collapse;
            /* border: 2px solid black; */
        }

        .content th,
        .content td {
            padding: 10px;
            border: 1px solid #333;
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

        .ndas {
            background-color: #DAD6D6;
            text-align: left;
            /* border-color: black; */
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="#">Beranda</a></li>
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
        <div class="content">
            <h2>Ini Halaman Beranda</h2>
            <p>Toko Puskrip adalah sebuah toko yang spesialis dalam jual beli produk elektronik. Kami menyediakan berbagai macam produk elektronik seperti smartphone, laptop, tablet, kamera, perangkat audio, dan perangkat elektronik lainnya. Dengan berbagai merek terkemuka dan produk berkualitas, kami berkomitmen untuk memberikan pengalaman belanja yang memuaskan bagi pelanggan kami.</p>
            <h2>Data Produk Terbaru Kami</h2>
            <table>
                <thead class="ndas">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Asus Tuf</td>
                        <td>Laptop ASUS TUF adalah pilihan ideal bagi para penggemar gaming yang mencari kombinasi performa tangguh dan ketahanan yang handal. Dibangun dengan desain kokoh dan tahan banting, laptop ini mampu menangani penggunaan yang intensif dan mobilitas sehari-hari dengan percaya diri. Dilengkapi dengan prosesor AMD Ryzen atau Intel Core terbaru serta kartu grafis NVIDIA GeForce GTX atau RTX, ASUS TUF menawarkan performa gaming yang responsif dan lancar untuk menjalankan game modern dengan detail grafis yang memukau.</td>
                        <td>$20.98</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ASUS ROG Zephyrus</td>
                        <td>Laptop ASUS ROG Zephyrus adalah salah satu perangkat unggulan dari Republic of Gamers (ROG) yang menawarkan kombinasi luar biasa antara performa gaming tinggi dan desain yang ramping serta portabel. Dirancang untuk memenuhi kebutuhan para gamer profesional dan pengguna yang menginginkan yang terbaik, Zephyrus menampilkan desain premium yang ramping dan ringan, serta dilengkapi dengan komponen-komponen canggih yang menawarkan performa gaming yang luar biasa.</td>
                        <td>$56.75</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- <div class="footer">
      <p>Footer</p>
    </div>
  </div> -->



</body>

</html>
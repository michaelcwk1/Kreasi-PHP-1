<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-image: url(../jpg/tree_and_mountain_landscape_3107.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .register-container {
            background-color: white;
            background-image: url(../jpg/tree_and_mountain_landscape_3107.jpg);
            padding: 20px;
            background-size: cover;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        
        .register-container h2 {
            text-align: center;
        }
        
        .register-container form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .register-container form input[type="text"],
        .register-container form input[type="password"] {
            background-color: rgba(230, 230, 255);
            /* Ungu muda terang dengan opacity 0.8 */
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            
        }
        
        .register-container form input[type="submit"] {
            background-color: transparent;
            color: #F5D8FB;
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 80px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            margin-top: 10px;
            /* font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; */
            
        }

        .form label {
            color: black;
            Font-family: Segoe UI;
            font-weight: 800;
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;
            
        }
        
        .register-container form input[type="submit"]:hover {
            background-color: black;
            opacity: 0.3;
        }

        .back-link button {
            background-color: transparent;
            text-align: center;
            color: white;
            font-size: medium;
            padding: 15px 25px;
            margin: 4px 2px;
            border: none;
            border-radius: 80px;
            text-decoration: none;
            cursor: pointer;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            margin-top: 10px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            /* font-weight: 800; */
        }
        
        .back-link button:hover {
            background-color: black;
            opacity: 0.3;
        }
        
        .back-link button {
            color: #F5D8FB;
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;
            
        }
        
        h2 {
            font-family: Segoe UI;
            
        }
        </style>
</head>

<body>
    <div class="register-container">
        <h2>FORM REGISTRASI</h2>
        <!-- <?php if (isset($login['error'])) : ?>
            <p style="color:red; font-style: italic;"><?= $login['pesan']; ?></p>
        <?php endif; ?> -->
        <form action="" method="POST">
            <div class="form">
                <label>
                    Username :
                    <input type="text" name="username" autofocus autocomplete="off" placeholder="Username" required>
                </label>
                
                <label>
                    Password :
                    <input type="password" name="password1" placeholder="Password" required>
                </label>
                
                <label>
                    Konfirmasi Password :
                    <input type="password" name="password2" placeholder="Konfirmasi Password" required>
                </label>
            </div>
            
            <div class="back-link">
                <button id="registerBtn">Registrasi</button>
            </div>
            
            
        </form>
    </div>
    <script src="regis.js" defer></script>
</body>

</html>
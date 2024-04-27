
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .login-container {
            background-color: white;
            background-image: url(../jpg/tree_and_mountain_landscape_3107.jpg);
            padding: 20px;
            background-size: cover;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: flex;
            flex-direction: column;
        }

        .login-container h2 {
            text-align: center;
        }

        .login-container form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
        }

        .login-container form input[type="text"],
        .login-container form input[type="password"] {
            background-color: rgba(230, 230, 255);
            /* Ungu muda terang dengan opacity 0.8 */
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;

        }

        .login-container form input[type="submit"] {
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

        .login-container form input[type="submit"]:hover {
            background-color: black;
            opacity: 0.3;
        }

        .back-link {
            background-color: transparent;
            text-align: center;
            color: white;
            padding: 10px 20px;
            display: inline-block;
            margin: 4px 2px;
            border: none;
            border-radius: 80px;
            text-decoration: none;
            cursor: pointer;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            margin-top: 10px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;


        }


        .back-link:hover {
            background-color: black;
            opacity: 0.3;

        }

        .back-link a {
            color: #F5D8FB;
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;

        }

        h2 {
            font-family:Segoe UI;

        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>LOGIN</h2>
        <form action="halaman.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <div class="back-link">
            <a href="register.php" >Register</a>
        </div>
    </div>

</body>

</html>
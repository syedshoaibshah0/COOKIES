<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
        }

        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #2196F3;
            color: white;
        }

        .topnav .login-container {
            float: right;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
            width: 120px;
        }

        .topnav .login-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            color: green;
            font-size: 17px;
            border: none;

        }

        .topnav .login-container button:hover {
            background-color: green;
        }

        @media screen and (max-width: 600px) {
            .topnav .login-container {
                float: none;
            }

            .topnav a,
            .topnav input[type=text],
            .topnav .login-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }

            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }
    </style>
</head>

<body>

    <?php
    echo "<div class='topnav'>
<a class='active' href='#home'>Home</a>
<a href='#about'>About</a>
<a href='#contact'>Contact</a>
<div class='login-container'>
  <form action='/action_page.php'>
    <button type='submit'><a href='get.php'>Cookies get</a></button>
    <button type='submit'><a href='set.php'>Cookies set</a></button>
  </form>
</div>
</div>";




    echo "<h1><b>Welcome in our Cookies class</h1></b>";
    
    setcookie("cars", "<b><i><h1>Cars</h1></b></i>", time() + 86400, "/");
    
    setcookie("head", "<b><i><h1>Headphones & Headsets</h1></b></i>", time() + 86400, "/");

    setcookie("mobile", "<b><i><h1>Mobiles</h1></b></i>", time() + 86400, "/");

    setcookie("laptop", "<b><i><h1>Laptops</h1></b></i>", time() + 86400, "/");

    echo "<h2>cookies set</h2>";

    echo "<div style='margin-left: 450px;'>
    <h2>Categories</h2>
    <form action='get.php' method='post'>
    <label><input type='checkbox' name='categories[]' value='Headphones'>Headphones & Headsets</label>
    <label><input type='checkbox' name='categories[]' value='Cars'>Cars</label>
    <label><input type='checkbox' name='categories[]' value='Mobiles'>Mobiles</label>
    <label><input type='checkbox' name='categories[]' value='laptops'>Laptops</label>
    <button style='background-color: green; padding: 6px 10px; margin-top: 8px; margin-right: 16px; color: white; font-size: 17px; border: none;' type='submit'>OK</button>
    </form>
    </div>";

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>
    <style>
        body {
            background-image: url('im.png'); /* اسم الصورة هنا */
            background-size: cover;
            background-position: center;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input[type="submit"] {
            background-color: #ff9900;
            color: #fff;
            border: none;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="indexspam.php" method="post">
            <input type="submit" value="SPAM CALL">
        </form>
        <form action="2etisalat.php" method="post">
            <input type="submit" value="Hours 2 ETISALAT">
        </form>

    </div>
</body>
</html>

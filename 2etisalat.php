<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        
        // عرض النصوص
        echo "<h1 style='color: yellow;'>$ramadan_kareem</h1>";
        echo "<hr style='color: red; border: 1px solid;'>";
        echo "<h1 style='color: green;'>$titanic_text</h1>";

        // فتح رابط تيليجرام
        echo "<script>window.open('https://t.me/gxhack200_ok', '_blank');</script>";
        sleep(5);

        $text1 = "G.𝐗 𝐇𝐀𝐂𝐊";




        echo "<hr style='color: red; border: 1px solid;'>";

        // إدخال البيانات من المستخدم
        $number = $_POST['number'] ?? '';
        $password = $_POST['password'] ?? '';
        $email = $_POST['email'] ?? '';

        if (strpos($number, "011") === 0) {
            $num = substr($number, 1);
        } else {
            $num = $number;
        }

        $code = "$email:$password";
        $auth = base64_encode($code);

        $urllog = "https://mab.etisalat.com.eg:11003/Saytar/rest/authentication/loginWithPlan";
        $headerslog = [
            "applicationVersion: 2",
            "applicationName: MAB",
            "Accept: text/xml",
            "Authorization: Basic $auth",
            "APP-BuildNumber: 964",
            "APP-Version: 27.0.0",
            "OS-Type: Android",
            "OS-Version: 12",
            "APP-STORE: GOOGLE",
            "Is-Corporate: false",
            "Content-Type: text/xml; charset=UTF-8",
            "Content-Length: 1375",
            "Host: mab.etisalat.com.eg:11003",
            "Connection: Keep-Alive",
            "Accept-Encoding: gzip",
            "User-Agent: okhttp/5.0.0-alpha.11",
            "ADRUM_1: isMobile:true",
            "ADRUM: isAjax:true"
        ];

        $datalog = "<?xml version='1.0' encoding='UTF-8' standalone='yes' ?><loginRequest><deviceId></deviceId><firstLoginAttempt>true</firstLoginAttempt><modelType></modelType><osVersion></osVersion><platform>Android</platform><udid></udid></loginRequest>";

        $ch = curl_init($urllog);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datalog);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headerslog);
        $log = curl_exec($ch);
        $logHeaders = curl_getinfo($ch);
        curl_close($ch);

        if (strpos($log, "true") !== false) {
            $headerArray = explode("\n", $logHeaders['request_header']);
            $ck = '';
            $br = '';
            foreach ($headerArray as $header) {
                if (strpos($header, 'Set-Cookie:') === 0) {
                    $ck = explode(';', substr($header, 12))[0];
                }
                if (strpos($header, 'auth:') === 0) {
                    $br = substr($header, 5);
                }
            }

            $url = "https://mab.etisalat.com.eg:11003/Saytar/rest/zero11/offersV3?req=<dialAndLanguageRequest><subscriberNumber>$num</subscriberNumber><language>1</language></dialAndLanguageRequest>";

            $headers = [
                'applicationVersion: 2',
                'Content-Type: text/xml',
                'applicationName: MAB',
                'Accept: text/xml',
                'Language: ar',
                'APP-BuildNumber: 10459',
                'APP-Version: 29.9.0',
                'OS-Type: Android',
                'OS-Version: 11',
                'APP-STORE: GOOGLE',
                'auth: Bearer ' . $br,
                'Host: mab.etisalat.com.eg:11003',
                'Is-Corporate: false',
                'Connection: Keep-Alive',
                'Accept-Encoding: gzip',
                'User-Agent: okhttp/5.0.0-alpha.11',
                'Cookie: ' . $ck
            ];

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $response = curl_exec($ch);
            curl_close($ch);

            $offer_id = null;
            if (strpos($response, 'true') !== false) {
                $xml = simplexml_load_string($response);
                foreach ($xml->xpath('//mabCategory/mabProduct/fulfilmentParameter') as $parameter) {
                    if ((string) $parameter->name == 'Offer_ID') {
                        $offer_id = (string) $parameter->value;
                        break;
                    }
                }
            } else {
                echo "<p style='color: red;'>هذا العرض غير متاح حاليا ليك حاول بكره تاني</p>";
            }

            if ($offer_id) {
                $urlsub = "https://mab.etisalat.com.eg:11003/Saytar/rest/zero11/submitOrder";
                $headerssub = [
                    "applicationVersion: 2",
                    "applicationName: MAB",
                    "Accept: text/xml",
                    "Cookie: $ck",
                    "Language: ar",
                    "APP-BuildNumber: 964",
                    "APP-Version: 27.0.0",
                    "OS-Type: Android",
                    "OS-Version: 12",
                    "APP-STORE: GOOGLE",
                    "auth: Bearer " . $br,
                    "Is-Corporate: false",
                    "Content-Type: text/xml; charset=UTF-8",
                    "Content-Length: 1375",
                    "Host: mab.etisalat.com.eg:11003",
                    "Connection: Keep-Alive",
                    "User-Agent: okhttp/5.0.0-alpha.11"
                ];

                $datasub = "<?xml version='1.0' encoding='UTF-8' standalone='yes' ?><submitOrderRequest><mabOperation></mabOperation><msisdn>$num</msisdn><operation>ACTIVATE</operation><parameters><parameter><name>GIFT_FULLFILMENT_PARAMETERS</name><value>Offer_ID:$offer_id;ACTIVATE:True;isRTIM:Y</value></parameter></parameters><productName>FAN_ZONE_HOURLY_BUNDLE</productName></submitOrderRequest>";

                $ch = curl_init($urlsub);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $datasub);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headerssub);
                $subs = curl_exec($ch);
                curl_close($ch);

                if (strpos($subs, "true") !== false) {
                    echo "<p style='color: red;'>❤️‍🔥معاك دلوقتي ساعتين سوشيال❤️‍🔥</p>";
                    echo "<script>window.open('https://t.me/gxhack200_ok', '_blank');</script>";
                } else {
                    echo "<p style='color: red;'>Check Your Data</p>";
                }
            }
        } else {
            echo "<p style='color: red;'>الرقم او كلمة السر غلط</p>";
        }
    }



?>

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
            color: #ffffff;
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
        <h2> 2 Hours ETISALAT{BY:G.XHACK}</h2>
        <form action="" method="POST">
            <label for="number">أدخل الرقم ETISALAT:</label><br>
            <input type="text" id="number" name="number" required><br><br>
            <label for="password">أدخل كلمة السر:</label><br>
            <input type="text" id="password" name="password" required><br><br>
            <label for="email">أدخل البريد الإلكتروني:</label><br>
            <input type="text" id="email" name="email" required><br><br>
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
</body>
</html>

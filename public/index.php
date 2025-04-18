<?php
echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divs Clicáveis</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .header-box {
            width: 400px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
            color: #000000;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .header-box:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }
        .header-box a {
            color: #007BFF;
            text-decoration: none;
            font-size: 14px;
            margin-top: 10px;
        }
        .header-box a:hover {
            text-decoration: underline;
        }
        .container {
            display: flex;
            gap: 20px;
        }
        .box {
            width: 150px;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.2s;
        }
        .box:hover {
            transform: scale(1.1);
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header-box" onclick="window.location.href=\'https://github.com/KeystoneDevBr/docker-databases\'">
        <div>Docker Databases for Ethical Hacking Penetration Test</div>
        <div style="font-size: 14px; font-weight: normal; margin-top: 10px;">
            Click in the botom to see more information about the procedure to use this docker images
        </div>
        <a href="https://github.com/KeystoneDevBr/docker-databases" target="_blank">More information..</a>
    </div>
    <div class="container">
        <div class="box" onclick="window.location.href=\'./phpinfo.php\'">PHP Info</div>
        <div class="box" onclick="window.location.href=\'https://127.0.0.1:4443\'">MYSQL Admin</div>
        <div class="box" onclick="window.location.href=\'https://127.0.0.1:44443\'">MariaDB Admin</div>
    </div>
</body>
</html>';
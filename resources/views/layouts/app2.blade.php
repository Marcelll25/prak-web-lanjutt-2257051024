<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #8B4513, #1E90FF);
            font-family: 'Arial', sans-serif;
            color: white;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 10px;
            box-shadow: 1px 1px 25px 1px rgba(0, 68, 255, 0.5);
            max-width: 400px;
            width: 100%;
            height: 60%;
            text-align: center;
        }


        .btn-kembali {
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            color: white;
            transition: background-color 0.3s ease;
            margin-right: 5px;
        }

        .btn-kembali {
            background-color: #008CBA;
        }

        .profile {
            margin-bottom: 20px;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #FFF;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .label {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .profile img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>

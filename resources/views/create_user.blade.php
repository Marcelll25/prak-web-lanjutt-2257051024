<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #8B4513, #1E90FF);
            font-family: 'Arial', sans-serif;
            color: white;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: #FFF;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #1E90FF;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #63B3FF;
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <h1>Create User</h1>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" required>
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

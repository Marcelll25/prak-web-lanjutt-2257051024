<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List User</title>
    <style>

            body {
                margin: 0;
                padding: 0;
                min-height: 100vh;
                background: linear-gradient(135deg, #8B4513, #1E90FF);
                font-family: 'Arial', sans-serif;
                color: white;
            }

            .content {
                max-width: 1000px;
                margin: 20px auto;
                padding: 20px;
                background-color: rgba(255, 255, 255, 0.15);
                border-radius: 15px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            }

            .btn-container {
                text-align: right;
                margin-bottom: 20px;
            }

            .btn-user {
                background-color: #1E90FF;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                font-weight: bold;
                transition: background-color 0.3s ease;
            }

            .btn-user:hover {
                background-color: #63B3FF;
            }

            .table-container {
                background-color: rgba(255, 255, 255, 0.2);
                border-radius: 10px;
                padding: 20px;
            }

            .table {
                width: 100%;
                border-collapse: collapse;
            }

            .table thead {
                background-color: rgba(30, 144, 255, 0.8);
                color: white;
            }

            .table th, .table td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            .table-group tr:hover {
                background-color: rgba(255, 255, 255, 0.3);
            }

            .btn {
                padding: 5px 10px;
                text-decoration: none;
                border-radius: 5px;
                font-size: 14px;
                font-weight: bold;
            }

            .btn-warning {
                background-color: #FFA500;
                color: white;
                transition: background-color 0.3s ease;
            }

            .btn-warning:hover {
                background-color: #FFB732;
            }

        </style>
</head>
<body>
    <div class="content">
        <div class="btn-container">
            <a href="{{ route('user.create') }}" class="btn-user">Tambah User</a>
        </div>
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group">
                    @foreach ($users as $user)
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['nama'] ?></td>
                            <td><?= $user['npm'] ?></td>
                            <td><?= $user['nama_kelas'] ?></td>
                            <td><a href="{{ route('user.show', $user->id) }}" class="btn btn-warning mb-3">Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>
</html>

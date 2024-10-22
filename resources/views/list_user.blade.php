<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List User</title>
    <style>


        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(135deg, #8B4513, #1E90FF);
            color: rgb(255, 255, 255);
        }

        .content {
            background-color: white;
            padding: 20px;
            margin: 40px auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
           width: 800px;
            position: absolute;
            z-index: 1;
            top: 150px;
            left: 280px;
        }

        .btn-container {
            text-align: right;
            margin-bottom: 20px;
        }

        .btn-user {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-user:hover {
            background-color: #45a049;
        }

        .table-container {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;

        }

        .table th, .table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
        }

        td {
            color: #000000;
        }
        .table th {
            background-color: #4CAF50;
            color: white;
            text-transform: uppercase;
        }

        .table tr:hover {
            background-color: #f2f2f2;
        }

        .table img {
            border-radius: 8px;
            object-fit: cover;
            height: 100px;
            width: 100px;
        }

        .view, .edit, .delete {
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            color: white;
            transition: background-color 0.3s ease;
            margin-right: 5px;
        }

        .view {
            background-color: #008CBA;
        }

        .view:hover {
            background-color: #007bb5;
        }

        .edit {
            background-color: #f0ad4e;
        }

        .edit:hover {
            background-color: #ec9c37;
        }

        .delete {
            background-color: #e74c3c;
            border: none;
            cursor: pointer;
        }

        .delete:hover {
            background-color: #c0392b;
        }

        @media screen and (max-width: 768px) {
            .table th, .table td {
                font-size: 14px;
                padding: 10px 12px;
            }

            .btn-user {
                padding: 8px 16px;
                font-size: 14px;
            }

            .view, .edit, .delete {
                font-size: 12px;
                padding: 5px 10px;
            }
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
                            <td><img src="{{ Storage::url($user->foto) }}" alt="Foto User" width="100"></td>
                            <td>
                                 <!-- View -->
                            <a href="{{ route('user.show', $user['id']) }}" class="view">View</a>

                            <!-- Edit -->
                            <a href="{{ route('user.edit', $user['id']) }}" class="edit">Edit</a>

                            <!-- Delete -->
                            <form action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

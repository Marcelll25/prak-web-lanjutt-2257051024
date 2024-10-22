<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <style>

            body {
                font-family: 'Arial', sans-serif;
                background: linear-gradient(to bottom right, #f2e6d9, #99ccff);
                margin: 0;
                padding: 20px;
                overflow: hidden;
            }


            .container {
                background-color: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                max-width: 600px;
                margin: 0 auto;
            }


            .text-center {
                text-align: center;
                font-size: 24px;
                color: #333;
                margin-bottom: 30px;
            }


            .label-konten {
                margin-bottom: 20px;
            }

            .form-label {
                font-size: 16px;
                font-weight: bold;
                color: #333;
                display: block;
                margin-bottom: 8px;
            }


            .form-control, .form-select {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                font-size: 16px;
                color: #333;
                transition: border-color 0.3s ease;
            }

            .form-control:focus, .form-select:focus {
                border-color: #66afe9;
                outline: none;
                box-shadow: 0px 0px 5px rgba(102, 175, 233, 0.5);
            }


            .btn-submit, .btn-back {
                display: inline-block;
                padding: 10px 20px;
                font-size: 16px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
                margin-right: 10px;
                transition: background-color 0.3s ease;
                text-decoration: none;
                text-align: center;
            }


            .btn-submit {
                background-color: #4CAF50;
                color: white;
            }

            .btn-submit:hover {
                background-color: #45a049;
            }


            .btn-back {
                background-color: #f44336;
                color: white;
            }

            .btn-back:hover {
                background-color: #e53935;
            }


            .btn-list-user {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                font-size: 16px;
                margin-bottom: 20px;
                display: inline-block;
                transition: background-color 0.3s ease;
            }

            .btn-list-user:hover {
                background-color: #45a049;
            }

            .profile-img {
                margin-top: 10px;
                width: 150px;
                height: 150px;
                object-fit: cover;
                border-radius: 8px;
                display: block;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }


            @media screen and (max-width: 768px) {
                .container {
                    padding: 20px;
                    max-width: 100%;
                }

                .text-center {
                    font-size: 20px;
                }

                .btn-submit, .btn-back, .btn-list-user {
                    font-size: 14px;
                    padding: 8px 15px;
                }

                .form-label {
                    font-size: 14px;
                }

                .profile-img {
                    width: 100px;
                    height: 100px;
                }
            }

    </style>
</head>
<body>
    <div>
        <a href="{{ route('user.list') }}" class="btn-list-user">List User</a>

        <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container">
                <h1 class="text-center">Input Data</h1>
                <div class="label-konten">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $user->nama) }}"
                        placeholder="Nama anda">
                </div>

                <div class="label-konten">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" class="form-control" name="npm" id="npm" value="{{ old('npm', $user->npm) }}"
                        placeholder="NPM anda">
                </div>

                <div class="label-konten">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select class="form-select" name="kelas_id" id="kelas_id">
                        @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="label-konten">
                    <label for="foto" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="foto" name="foto">
                    @if ($user->foto)
                    <img src="{{ Storage::url($user->foto) }}" alt="profile" class="profile-img"></img>
                    @endif
                </div>

                <button type="submit" class="btn-submit">Submit</button>
                <a href="{{ route('user.list') }}" class="btn-back">Kembali</a>
            </div>
        </form>
    </div>

</body>
</html>

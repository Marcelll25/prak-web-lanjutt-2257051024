@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <h1>Create User</h1>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="@error('nama') invalid @enderror">
            @error('nama')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" value="{{ old('npm') }}" class="@error('npm') invalid @enderror">
            @error('npm')
                <div class="error">{{ $message }}</div>
            @enderror

            <select name="kelas_id" id="kelas_id" class="@error('kelas_id') invalid @enderror">
                <option value="">Pilih Kelas</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
            @error('kelas_id')
                <div class="error">{{ $message }}</div>
            @enderror
            <input type="submit" value="Submit">
        </form>
    </div>
    @endsection

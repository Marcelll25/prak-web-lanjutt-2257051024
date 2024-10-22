@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="profile">
        <img src="{{ Storage::url($user->foto) }}">
    </div>
    <div class="info">
        <div class="label">{{ $user->nama }}</div>
        <div class="label">{{ $user->npm }}</div>
        <div class="label">{{ $user->nama_kelas  ?? 'Kelas tidak ditemukan' }}</div>
    </div>
</div>
@endsection

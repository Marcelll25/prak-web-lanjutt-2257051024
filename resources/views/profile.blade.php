@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="profile">
        <img src="/asset/images/profile.jpg">
    </div>
    <div class="info">
        <div class="label">{{ $nama }}</div>
        <div class="label">{{ $npm }}</div>
        <div class="label">{{ $nama_kelas }}</div>
    </div>
</div>
@endsection

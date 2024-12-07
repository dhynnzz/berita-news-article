@extends('layouts.app') <!-- Menggunakan layout utama Laravel -->

@section('title', 'Tambah Data Informasi')

@section('content')
    <div class="form-container">
        <h2>Tambah Data Informasi</h2>
        <form action="{{ route('informasi.store') }}" method="POST">
            @csrf <!-- Laravel CSRF Protection -->

            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <label for="judul_informasi">Judul Informasi:</label>
            <input type="text" id="judul_informasi" name="judul_informasi" required>

            <label for="sumber_informasi">Nama Sumber:</label>
            <input type="text" id="sumber_informasi" name="sumber_informasi" required>

            <label for="deskripsi">Deskripsi:</label>
            <input type="text" id="deskripsi" name="deskripsi" required>
            <div class="gatau">
            <button type="submit">Simpan</button>
            <a href="{{ route('informasi.informasi')}"

            </div>

        </form>
    </div>
@endsection

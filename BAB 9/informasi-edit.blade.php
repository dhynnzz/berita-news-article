@extends('layouts.app') <!-- Menggunakan layout utama Laravel -->

@section('title', 'Edit Data Informasi')

@section('content')
<form action="{{ route('informasi.update', $sudut->id_informasi) }}" method="POST">
    @csrf
    @method('PUT') <!-- Method spoofing untuk metode PUT -->

    <label for="judul_informasi">Judul Informasi:</label>
    <input type="text" id="judul_informasi" name="judul_informasi" value="{{ old('judul_informasi', $sudut->judul_informasi) }}" required>

    <label for="tanggal">Tanggal:</label>
    <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal', $sudut->tanggal) }}" required>

    <label for="sumber_informasi">Sumber Informasi:</label>
    <input type="text" id="sumber_informasi" name="sumber_informasi" value="{{ old('sumber_informasi', $sudut->sumber_informasi) }}" required>

    <label for="deskripsi">Deskripsi:</label>
    <textarea id="deskripsi" name="deskripsi" required>{{ old('deskripsi', $sudut->deskripsi) }}</textarea>

    <button type="submit">Simpan Perubahan</button>
</form>

    </div>
@endsection

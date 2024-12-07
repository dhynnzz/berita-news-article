@extends('layouts.app')

@section('title', 'Hapus Pencatatan Keuangan')

@section('content')

<div class="form-hapus" id="form-hapus">
  <h4>Ingin Menghapus Data ?</h4>
  
  <form action="{{ route('informasi.destroy', $sudut->id_informasi) }}" method="POST" id="form-hapus-laporan" style="text-align: center;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-simpan" name="hapus" id="btn-hapus" style="width: 100%; margin: 20px auto;">
      Yes
    </button>
  </form>


  <a href="{{ route('informasi') }}" class="btn btn-simpan" id="btn-batal" style="width: 100%; margin: 20px auto; display: block;">
    No
  </a>
</div>
@endsection
@extends('layouts.app') <!-- Menggunakan layout utama Laravel -->

@section('title', 'Data Informasi')

@section('content')
    <div class="layout">



            <div class="table-container">
                <h2>Data Informasi</h2>
                <div class="tambah-data">
                    <a href="{{ url('informasi-entry') }}">Tambah Data</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Judul Informasi</th>
                            <th>Tanggal</th>
                            <th>Nama Sumber</th>
                            <th>Alamat Sumber</th>
                            <th>Aksi</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sudut as $data)
                            <tr>
                                <td>{{ $data->judul_informasi }}</td>
                                <td>{{ $data->tanggal }}</td>
                                <td>{{ $data->sumber_informasi }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td>
                                <a href="{{ route('informasi.edit', $data->id_informasi) }}" class="btn btn-edit">Edit</a>

                                    <a href="{{ route('informasi.hapus',$data->id_informasi) }}" class="btn btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                </td>
                                <td>
                                    <a href="{{ url('information-hapus'.$data->id_informasi) }}" class="btn btn-edit">Tambah Kategori</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">Tidak ada data.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

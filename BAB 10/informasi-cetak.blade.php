<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sudut Informasi</title>
  <style>
    .table-data {
        border-collapse: collapse;
        width: 100%;
    }

    .table-data th,
    .table-data td {
        border: 1px solid black;
        padding: 10px 20px;
        text-align: center;
    }

    .table-data th {
        background-color: #2c3e50;
        color: white;
    }

    .table-data tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table-data tr:hover {
        background-color: #f5f5f5;
    }
</style>

</head>

<body>
  <h3>Sudut Informasi</h3>
  <table class="table-data">
    <thead>
      <tr>
      <th>NO</th>
        <th>TANGGAL</th>
        <th>JUDUL INFORMASI</th>
        <th>SUMBER INFORMASI</th>
        <th>DESKRIPSI</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($sudut as $data)
      <tr>
        <td>{{ $loop->iteration }}</td>

        <td>{{ $data->tanggal }}</td>
        <td>{{ $data->judul_informasi}}</td>
        <td >{{ $data->sumber_informasi }}</td>
        <td >{{ $data->deskripsi }}</td>
      </tr>
      @empty
      <tr>
        <td colspan="7" align="center">Tidak ada data</td>
      </tr>
      @endforelse
    </tbody>
</body>

</html>

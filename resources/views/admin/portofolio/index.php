<!DOCTYPE html>
<html>
<head>
    <title>Data Biodata</title>
</head>
<body>

    <h2>Data Biodata</h2>

    <a href="{{ route('biodata.create') }}">
        Tambah Biodata
    </a>

    <table border="1" cellpadding="10">
        <tr>
            <th>NIM</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Email</th>
            <th>Telepon</th>
        </tr>

        @foreach ($dataBiodata as $biodata)
        <tr>
            <td>{{ $biodata->nim }}</td>
            <td>{{ $biodata->first_name }}</td>
            <td>{{ $biodata->last_name }}</td>
            <td>{{ $biodata->email }}</td>
            <td>{{ $biodata->phone }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>

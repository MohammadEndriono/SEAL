<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penduduk</title>
</head>
<body>
    <center>
        <p>
            <button type="button" onclick="window.location='/penduduk/tambah'">
                Tambah
            </button>
        </p>
        <table style="width: 80%; border-collapse: 1; border:1px solid #000" border="1">
            <thead>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
            </thead>
            <tbody>
                @foreach ( $dataPenduduk as $d )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nik }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->password }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>       

</body>
</html>
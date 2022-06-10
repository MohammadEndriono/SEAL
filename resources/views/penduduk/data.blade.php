ini adalah data penduduk
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penduduk</title>
</head>
<body>
    <center>
        <table style="width: 80%; border-collapse: 1; border:1px solid #000" border="1">
            <thead>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
            </thead>
            <tbody>
                @foreach (datapenduduk as $d)
                    <tr>
                        <td></td>
                        <td>{{ $d->nik }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>       

</body>
</html>
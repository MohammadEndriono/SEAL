<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah Penduduk</title>
</head>
<body>
    <center>
        <p>
            <button type="button" onclick="window.location='/penduduk/index'">
                &laquo; Kembali
            </button>

            @if (session('msg'))
                {{ session('msg') }}
            @endif
            
            <form method="POST" action="{{ url('/penduduk/simpan') }}">
                @csrf
                <table style="widows: 70%">
                    <tr>
                        <td>NIK :</td>
                        <td>
                            <input type="text" name="nik" id="nik">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama :</td>
                        <td>
                            <input type="text" name="nama" id="nama">
                        </td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td>
                            <input type="text" name="email" id="email">
                        </td>
                    </tr>
                    <tr>
                        <td>Password :</td>
                        <td>
                            <input type="text" name="password" id="password">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit">
                                Simpan
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </p>
    </center>
</body>
</html>
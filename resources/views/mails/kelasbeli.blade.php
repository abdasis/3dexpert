<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas Dibeli</title>
</head>
<body>
    Kelas Berhasil Dibeli Dengan Rincian Sebagai Berikut

    <table>
        <tr>
            <td>Nama Kelas</td>
            <td>:</td>
            <td>{{ $kelas->nama_kelas }}</td>
        </tr>
        <tr>
            <td>Level Kelas</td>
            <td>:</td>
            <td>{{ $kelas->level_kelas }}</td>
        </tr>
        <tr>
            <td>Level Kelas</td>
            <td>:</td>
            <td>{{ $kelas->harga_kelas }}</td>
        </tr>
        <tr>
            <td>Nama Pembeli</td>
            <td>:</td>
            <td>{{ $pembeli->name }}</td>
        </tr>
        <tr>
            <td>Email Pembeli</td>
            <td>:</td>
            <td>{{ $pembeli->email }}</td>
        </tr>
        <tr>
            <td>Telepon Pembeli</td>
            <td>:</td>
            <td>{{ $pembeli->phone }}</td>
        </tr>
    </table>
</body>
</html>

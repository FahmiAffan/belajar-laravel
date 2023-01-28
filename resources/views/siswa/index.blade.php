<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div>Haloo ini halaman siswa</div>
    <table>
        <thead class="border">
            <tr>
                <th class="border">Nama Siswa</th>
                <th class="border">Kelas</th>
                <th class="border">Jurusan</th>
                <th class="border">Alamat</th>
            </tr>
        </thead>
        <tbody class="border">
            @foreach ($siswa as $siswa)
            <tr>
                <td class="border">{{ $siswa->nama_siswa }}</td>
                <td class="border">{{ $siswa->kelas }}</td>
                <td class="border">{{ $siswa->jurusan }}</td>
                <td class="border">{{ $siswa->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

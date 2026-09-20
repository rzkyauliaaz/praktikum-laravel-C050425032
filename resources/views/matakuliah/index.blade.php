<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Kuliah</title>
</head>
<body>

    <h1>Daftar Mata Kuliah</h1>

    @foreach ($matakuliah as $mk)
        <div>
            <h2>{{ $mk->nama_mk }}</h2>
            <p>Kode: {{ $mk->kode_mk }}</p>
            <p>SKS: {{ $mk->sks }}</p>
            <p>Semester: {{ $mk->semester }}</p>
            <p>Dosen: {{ $mk->dosen->name ?? 'Belum ada dosen' }}</p>
        </div>
    @endforeach

</body>
</html>
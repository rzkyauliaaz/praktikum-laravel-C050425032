<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
</head>
<body>

    <h1>Tambah Mata Kuliah</h1>

  <form action="{{ route('matakuliah.store') }}" method="POST">
    @csrf

    <label>Kode Mata Kuliah</label>
    <input type="text" name="kode_mk">

    <br><br>

    <label>Nama Mata Kuliah</label>
    <input type="text" name="nama_mk">

    <br><br>

    <label>SKS</label>
    <input type="number" name="sks">

    <br><br>

    <label>Semester</label>
    <input type="number" name="semester">

    <br><br>

    <label>Dosen Pengampu</label>
    <select name="dosen_id">
    @foreach ($dosens as $dosen)
        <option value="{{ $dosen->id }}">{{ $dosen->name }}</option>
    @endforeach
    </select>

    <br><br> 

    <button type="submit">Simpan</button>
</form>  

</body>
</html>
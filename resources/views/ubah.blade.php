<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Data Kependudukan</title>
    <style>
        label {
            display: inline-block;
            width: 120px;
            text-align: left;
            margin-right: 10px;
        }

        input[type=text], input[type=date], select {
            display: inline-block;
            width: 200px;
        }

        input[type=submit] {
            margin-left: 130px;
        }
    </style>
</head>

<body>
    @extends('template')
    @section('content')
        <h3>Halaman Ubah Data Kependudukan</h3>
        <a href="/kependudukan" class="btn btn-danger">Kembali</a>
        <div class="card">
            <div class="card-header">
                <br>
                @foreach($data as $kependudukan)
                <form action="/kependudukan/edit" method="post">
                    {{ csrf_field() }}
                    <label for="nik">NIK</label>
                    <input type="text" name="nik" required="required" value="{{$kependudukan->nik}}" readonly><br/>
                    <label for="nama">NAMA</label>
                    <input type="text" name="nama" id="nama" required="required"><br/>
                    <label for="alamat">ALAMAT</label>
                    <input type="text" name="alamat" id="alamat" required="required"><br/>
                    <label for="tempat_lahir">TEMPAT LAHIR</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" required="required"><br/>
                    <label for="tanggal_lahir">TANGGAL LAHIR</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required="required"><br/>
                    <label for="agama">AGAMA</label>
                    <select name="agama" id="agama">
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select><br/>
                    <label for="pendidikan">PENDIDIKAN</label>
                    <input type="text" name="pendidikan" id="pendidikan" required="required"><br/>
                    <label for="jenis_kelamin">JENIS KELAMIN</label>
                    <input type="radio" name="jenis_kelamin" value="laki-laki" required>LAKI-LAKI
                    <input type="radio" name="jenis_kelamin" value="perempuan" required>PEREMPUAN<br/><br/>
                    <input type="submit" class="btn btn-success my-3" value="Simpan Data">
                </form>
    @endforeach
            </div>
        </div>
    @endsection
</body>
</html>

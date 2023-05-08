<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content=""width=device-width,intitial-scale=1">
    <title>Pemrograman Berbasis Website</title>
</head>
<body>
<style>
  .logo {
    float: right;
    max-width: 250px;
    margin: 10px 20px 0 0; 
  }
</style>
@extends('template')
@section('content')
    <img class="logo" src="admin/dist/img/logo.png" style="float: right;">
    <h3>DATA KEPENDUDUKAN DUTA BANGSA</h3>
    <h6>UNIVERSITAS DUTA BANGSA SURAKARTA</h6>

<a href="/tambah"  class="btn btn-info my-3"><i class="fas fa-user-plus"></i> KEPENDUDUKAN</a>
<a href="/kependudukan/cetak_pdf" target="_blank" class="btn btn-warning my-3"><i class="fas fa-file-pdf"></i> EXPORT PDF</a>
<a href="/kependudukan/export_excel" target="_blank" class="btn btn-success my-3"><i class="fas fa-file-excel"></i> EXPORT EXCEL </a>

<br><br>
<div class="card">
<div class="card-header">
<table border='2' class="table table-bordered teble-hover table-striped">
    <thead style="background-color:yellow;">
    <tr>
        <th>NIK</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>TEMPAT LAHIR</th>
        <th>TANGGAL LAHIR</th>
        <th>AGAMA</th>
        <th>PENDIDIKAN</th>
        <th>STATUS KAWIN</th>
        <th>JUMLAH SAUDARA</th>
        <th>JENIS KELAMIN</th>
        <th>OPSI</th>
    </tr>
    </thead>
    @foreach ($data as $kependudukan)
    <tr>
        <td>{{ $kependudukan->nik }}</td>
        <td>{{ $kependudukan->nama }}</td>
        <td>{{ $kependudukan->alamat }}</td>
        <td>{{ $kependudukan->tempat_lahir }}</td>
        <td>{{ $kependudukan->tanggal_lahir }}</td>
        <td>{{ $kependudukan->agama }}</td>
        <td>{{ $kependudukan->pendidikan }}</td>
        <td>{{ $kependudukan->status_kawin }}</td>
        <td>{{ $kependudukan->jumlah_saudara }}</td>
        <td>{{ $kependudukan->jenis_kelamin }}</td>
        <td>
            <a class="btn btn-warning" href='/kependudukan/ubah/{{ $kependudukan->nik}}' ><i class="fas fa-user-edit"></i> Edit
            </a> |
                @method('delete')
                {{ csrf_field() }}
                <a class="btn btn-danger" onclick="return confirm ('anda yakin ingin menghapus data ini ?')" href="/hapus/{{$kependudukan->nik}}"><i class ="fa fa-trash"></i> Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
</div>
@endsection
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href ="https://stackpath.bootsrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXcMQv3xipma34MD+dh/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <style type="tetx/css">
        table tr td
        table tr td{
            font-size: 9pt;
        }
        </style>
        <center>
    <h4>DATA KEPENDUDUKAN</h4>
    <h6>Universitas Duta Bangsa surakarta</h6>
    </center>


<table class='table table-bordered' >
    <thead>
    <tr>

        <th>NO</th>
        <th>NIK</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>TEMPAT LAHIR</th>
        <th>TANGGAL LAHIR</th>
        <th>AGAMA</th>
        <th>PENDIDIKAN</th>
        <th>JENIS KELAMIN</th>
        
    </tr>
    </thead>
    <tbody>
    @php $i=1 @endphp
    @foreach ($kpnd as $p)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $p->nik }}</td>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->alamat }}</td>
        <td>{{ $i++ }}</td>
        <td>{{ $p->tempat_lahir }}</td>
        <td>{{ $p->tanggal_lahir }}</td>
        <td>{{ $p->agama }}</td>
        <td>{{ $p->pendidikan }}</td>
        <td>{{ $p->jenis_kelamin }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
    </body>
</html>
@extends('layout/tampilan')

@section('title','Master Data Peserta')

@section('content')

<br>
<br><br><br>
<div class="countainer">
<table class="table table-striped table-dark">
<thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Depan</th>
        <th scope="col">Nama Belakang</th>
        <th scope="col">Nik</th>
        <th scope="col">phone</th>
        <th scope="col">photo</th>
        <th scope="col">password</th>
        <th scope="col">Alamat</th>
        <th scope="col">Kota</th>
        <th scope="col">Provinsi</th>
        <th scope="col">Lahir</th>
        <th scope="col">email</th>
    </tr>
</thead>
<tbody>
<tr>
        <td>1</td>
        <td>Stepano</td>
        <td>Ramalo Bibit</td>
        <td>123456</td>
        <td>098765678</td>
        <td>#</th>
        <td>ramalo2345</td>
        <td>Karangan</td>
        <td>Kota</td>
        <td>Kalimantan Barat</td>
        <td>1995-10-01</td>
        <td>Ramalo@gmail.com</td>
        <td>
        <button type="submit" class="btn btn-success">Edit</button>
        <button type="submit" class="btn btn-info">Hapus</button>
        </td>
        <button type="submit" class="btn btn-success">Tambah Data</button>
    </tr>
    <tr>
        <td>2</td>
        <td>Ardi</td>
        <td>Sandi</td>
        <td>123456</td>
        <td>09876567128</td>
        <td>#</th>
        <td>sandi2345</td>
        <td>Ngabang</td>
        <td>Ngabang</td>
        <td>Kalimantan Barat</td>
        <td>1995-10-01</td>
        <td>sandi@gmail.com</td>
        <td>
        <button type="submit" class="btn btn-success">Edit</button>
        <button type="submit" class="btn btn-info">Hapus</button>
        </td>
    </tr>
</tbody>
</table>
</div>
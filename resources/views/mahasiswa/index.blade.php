@extends('layout.main')

@section('title','Daftar Mahasiswa')

@section('container');
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Hanindita Satrio Hutomo</td>
                        <td>123150047</td>
                        <td>satriohutomo69@gmail.com</td>
                        <td>Teknik Informatika</td>
                        <td>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
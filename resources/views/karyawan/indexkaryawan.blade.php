@extends('layouts.admin')
@section('judul', 'Data Karyawan')

@section('tabel')

<div class="p-3">
    <a href="{{ route('karyawan.create') }}" class="btn btn-primary my-3">Tambah data karyawan</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>            
                <th scope="col">Nama Karyawan</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Gaji (Rp)</th>
                <th scope="col">Umur</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($profiles as $profil)
                <tr>
                <th scope="row">{{$profil->id}}</th>
                <td>{{$profil->nama}}</td>
                <td>{{ $profil->pekerjaan}}</td>
                <td>{{ $profil->gaji}}</td>
                <td>{{ $profil->umur}}</td>
                <td class="mr-3">

                
                <a href="{{ route('karyawan.show', $profil->id) }}" class="btn btn-info">Show</a>

                <a href="{{ route('karyawan.edit', $profil->id) }}" class="btn btn-success">Edit</a>

                <a href="/karyawan/ {{$profil->id }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>

                    </td>
                @endforeach
</div>
            </tr>
              
            {{--tidak ada data --}}
            </tbody>
            </tr>
         
        </tbody>

    </table>
</div>
@endsection

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>



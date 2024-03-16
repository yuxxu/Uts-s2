@extends('layouts.admin')

@section('judul')

@endsection

@section('content')
<div class="p-3">
    <h2>Edit Data Profile Karyawan {{$profile->id}} </h2>
    <form action="/karyawan/{{$profile->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" value="{{$profile->nama}}" id="profiles" placeholder="Masukkan Nama Lengkap">
            @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" value="{{$profile->pekerjaan}}" id="profiles" placeholder="Masukkan Pekerjaan">
            @error('pekerjaan')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

         <div class="form-group">
            <label for="gaji">Gaji</label>
            <input type="text" class="form-control" name="gaji" value="{{$profile->gaji}}" id="profiles" placeholder="Masukkan Gaji">
            @error('gaji')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
              @enderror
        </div>

                 <div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" class="form-control" name="umur" value="{{$profile->umur}}" id="profiles" placeholder="Masukkan Pekerjaan">
            @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
               @enderror
        </div>

        <a href="/karyawan" class="btn btn-success my-3">Kembali</a>
        <button type="submit" class="btn btn-primary">Update Data</button>

    </form>
</div>
@endsection

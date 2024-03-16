@extends('layouts.admin')
@section('judul', 'Tambah Data Karyawan')

@section('content')

<form action="{{ route('karyawan.store') }}" method="POST">
    @csrf

    <div class="form-group p-3">
        <label>Nama Lengkap</label>
        <input type="text" name='nama' class="form-control" placeholder="Masukkan Nama Lengkap">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="form-group p-3">
        <label>Pekerjaan</label>
        <input type="text" name='pekerjaan' class="form-control" placeholder="Masukkan Pekerjaan">
            @error('pekerjaan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

     <div class="form-group p-3">
        <label>Gaji</label>
        <input type="number" name='gaji' class="form-control" placeholder="Masukkan Gaji">
            @error('gaji')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="form-group p-3">
        <label>Umur</label>
        <input type="number" name='umur' class="form-control" placeholder="Masukkan Umur">
            @error('umur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="p-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
@endsection
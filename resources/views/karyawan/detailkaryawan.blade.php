@extends('layouts.admin')
@section('judul')
Detail Profil Karyawan
@endsection

@section('content')
    <div class="p-3">
            <div class="card" style="width: 24rem;" >
                <div class="card-body ">
                    <h5 class="card-title">Detail Data Profil Karyawan ke {{$profiles->id}}</h5>
                    <h4>{{$profiles->nama}}</h4>
                    <h4>{{$profiles->pekerjaan}}</h4>
                    <h5>{{$profiles->gaji}}</h5>
                    <h5>{{$profiles->umur}}</h5>
                </div>
            </div>
        <a href="/karyawan" class="btn btn-primary my-3">Kembali</a>
    </div>
@endsection
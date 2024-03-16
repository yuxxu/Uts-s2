<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KaryawanController extends Controller
{
    public function index()
    {  

        $profiles = Profile::all();




        $title = 'Peringatan!';
        $text = 'Apakah anda yakin ingin menghapus data?';
        $icon = "Question";
        confirmDelete($title, $text);


        
        return view('karyawan.indexkaryawan', compact('profiles'));

    }

    public function destroy($id)
    {
        $profile = Profile::find($id);


        if (!$profile) {
            return redirect()->route('karyawan.index')->with('error', 'Karyawan tidak ditemukan!');
        }

        if($profile->delete()){
            Alert::success('Berhasil!', 'Berhasil menghapus data');
        }
        return redirect()->route('karyawan.index')->with('success', 'Data berhasil dihapus');
    
    }

    public function edit($id)
    {
        $profile = Profile::find($id);
        if (!$profile) {
            return redirect()->route('karyawan.index')->with('error', 'Karyawan tidak ditemukan!');
        }
        return view('karyawan.editkaryawan', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'pekerjaan' => 'required',
            'gaji' => 'required',
            'umur' => 'required',
        ]);
    
        $profile = Profile::find($id);
        if (!$profile) {
            return redirect()->route('karyawan.index')->with('error', 'Karyawan tidak ditemukan!');
        }
    
        $profile->nama = $request->nama;
        $profile->pekerjaan = $request->pekerjaan;
        $profile->gaji = $request->gaji;
        $profile->umur = $request->umur;
        $profile->save();
    
        Alert::success('Berhasil!', 'Berhasil perbarui data');
        return redirect()->route('karyawan.index');
    }
    

    public function show($id)
    {
        $profiles = Profile::findOrFail($id);
        return view('karyawan.detailkaryawan', compact('profiles'));
    }

    public function create()
    {
        return view('karyawan.tambahkaryawan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'pekerjaan' => 'required',
            'gaji' => 'required',
            'umur' => 'required',
        ]);

        Profile::create([
            'nama' => $request->nama,
            'pekerjaan' => $request->pekerjaan,
            'gaji' => $request->gaji,
            'umur' => $request->umur,
        ]);

        Alert::success('Berhasil!', 'Berhasil masukkan data');
        return redirect()->route('karyawan.index');
    }

   

    public function tambahkaryawan()
    {
        return view('karyawan.tambahkaryawan');
    }
}

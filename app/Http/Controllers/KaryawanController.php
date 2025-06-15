<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function karyawan()
    {
        $karyawan = DB::table('karyawan')->paginate(15);
        return view('karyawan', ['karyawan' => $karyawan]);
    }

    public function tambah()
    {
        return view('tambahkaryawan');
    }

    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);
        return redirect('/karyawan');
    }

    // method untuk edit data karyawan
    public function edit($kp)
    {
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kp)->get();
        return view('editkaryawan', ['karyawan' => $karyawan]);
    }

    // update data karyawan
    public function update(Request $request)
    {
        DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);
        return redirect('/karyawan');
    }

    // method untuk hapus data karyawan
    public function hapus($kp)
    {
        DB::table('karyawan')->where('kodepegawai', $kp)->delete();
        return redirect('/karyawan');
    }

    // method untuk mencari karyawan
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $karyawan = DB::table('karyawan')
            ->where('namalengkap', 'like', "%" . $cari . "%")
            ->paginate();
        return view('indexkaryawan', ['karyawan' => $karyawan]);
    }
}

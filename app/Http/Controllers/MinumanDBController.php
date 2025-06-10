<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Impor Facade DB

class MinumanDBController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel 'minuman' dengan paginasi
        $minuman = DB::table('minuman')->paginate(10);

        // Mengirim data minuman ke view 'minuman'
        return view('minuman', ['minuman' => $minuman]);
    }

    public function tambah()
    {
        // Memanggil view 'tambah_minuman'
        return view('tambah_minuman');
    }

    public function store(Request $request)
    {
        // Memasukkan data ke tabel 'minuman'
        DB::table('minuman')->insert([
            'merkminuman' => $request->merk, // Menggunakan $request->merk sesuai form tambah_minuman
            'hargaminuman' => $request->harga, // Menggunakan $request->harga sesuai form tambah_minuman
            'tersedia' => $request->tersedia == 'on' ? 1 : 0, // Mengubah checkbox menjadi boolean
            'berat' => $request->berat
        ]);

        // Mengalihkan halaman kembali ke halaman daftar minuman
        return redirect('/minuman');
    }

    public function edit($id)
    {
        // Mengambil data minuman berdasarkan ID yang dipilih
        $minuman = DB::table('minuman')
                    ->where('id', $id) // 'id' adalah primary key tabel 'minuman'
                    ->get();

        // Mengirim data minuman yang didapat ke view 'edit_minuman'
        return view('edit_minuman', ['minuman' => $minuman]);
    }

    public function update(Request $request)
    {
        // Memperbarui data minuman
        DB::table('minuman')->where('id', $request->id)->update([
            'merkminuman' => $request->merk, // Menggunakan $request->merk sesuai form edit_minuman
            'hargaminuman' => $request->harga, // Menggunakan $request->harga sesuai form edit_minuman
            'tersedia' => $request->tersedia == 'on' ? 1 : 0, // Mengubah checkbox menjadi boolean
            'berat' => $request->berat
        ]);

        // Mengalihkan halaman kembali ke halaman daftar minuman
        return redirect('/minuman');
    }

    public function hapus($id)
    {
        // Menghapus data minuman berdasarkan ID yang dipilih
        DB::table('minuman')->where('id', $id)->delete();

        // Mengalihkan halaman kembali ke halaman daftar minuman
        return redirect('/minuman');
    }

    public function cari(Request $request)
    {
        // Menangkap data pencarian
        $cari = $request->cari;

        // Mengambil data dari tabel 'minuman' sesuai pencarian
        $minuman = DB::table('minuman')
                    ->where('merkminuman', 'like', "%" . $cari . "%")
                    ->paginate(10); // Tetap menggunakan paginasi

        // Mengirim data minuman hasil pencarian ke view 'minuman'
        return view('minuman', ['minuman' => $minuman]);
    }
}

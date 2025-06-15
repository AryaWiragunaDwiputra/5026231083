<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
	public function indexkeranjang()
		{
			// mengambil data dari table keranjang
            $keranjangs = DB::table('keranjangbelanja')-> paginate(10);

			// mengirim data keranjang ke view index
			return view('indexkeranjang',['keranjangs' => $keranjangs]);
		}
	public function tambahkeranjang()
		{
			// memanggil view tambah
			return view('tambahkeranjang');
		}

    public function storekeranjang($ID) //ada primary key
    {
        // mengambil data keranjang berdasarkan id yang dipilih
        $keranjangs = DB::table('keranjangbelanja')
        ->where('ID',$ID) //khusus operator =, kalau mau pakai selain itu harus sebutin operator di parameter kedua nya
        ->get();
        // passing data keranjang yang didapat ke view edit.blade.php
        return view('tambahkeranjang',['keranjangs' => $keranjangs]);
    }
    // update data keranjang
    public function updatekeranjang(Request $request)
    {
        // update data keranjang
        DB::table('keranjangbelanja')->where('ID',$request->ID)->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);
        // alihkan halaman ke halaman keranjang
        return redirect('/keranjang');
    }
    // method untuk hapus data keranjang
    public function keranjangbelanja($ID)
    {
        // menghapus data keranjang berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID',$ID)->delete();

        // alihkan halaman ke halaman keranjang
        return redirect('/keranjang');
    }
}

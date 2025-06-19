@extends('template')
@section('content')
    <h3>Keranjang Belanja</h3>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @foreach ($keranjangs as $keranjang)
            <tr>
                <td>{{ $keranjang->ID }}</td>
                <td>{{ $keranjang->KodeBarang }}</td>
                <td>{{ $keranjang->Jumlah }}</td>
                <td>{{ number_format($keranjang->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($keranjang->Jumlah * $keranjang->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjang/tambah/{{ $keranjang->ID }}" class="btn btn-success">Beli</a>
                    <a href="/keranjang/hapus/{{ $keranjang->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $keranjangs->links() }}
@endsection

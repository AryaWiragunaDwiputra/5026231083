@extends('template')
@section('content')
    <h3>Beli Barang</h3>

    <a href="/keranjang" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/keranjang/update" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" for="KodeBarang">
                Kode Barang
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="KodeBarang" placeholder="Masukkan Kode Barang" name="KodeBarang" required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Jumlah">
                Jumlah Pembelian
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="Jumlah" placeholder="Masukkan Jumlah Pembelian" name="Jumlah" required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="Harga">
                Harga per item
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="Harga" placeholder="Masukkan Harga per Item" name="Harga" required="required">
            </div>
        </div>

        <input type="submit" value="Confirm" class="btn btn-success">
    </form>Add commentMore actions
@endsection

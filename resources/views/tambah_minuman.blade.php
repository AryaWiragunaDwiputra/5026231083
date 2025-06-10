@extends('template')
@section('content')
    <h3>Data Minuman</h3>

    <a href="/minuman" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/minuman/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="id1">
                Merk Minuman
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merk" placeholder="Masukkan Merk Lengkap" name="merk"
                    required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="id1">
                Harga Minuman
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="harga" placeholder="Masukkan Harga" name="harga"
                    required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="id1">
                Tersedia
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="tersedia" placeholder="1 Jika tersedia, 0 jika tidak" name="tersedia"
                    required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="id1">
                Berat (kg)
            </label>
            <div class="col-sm-6">
                <textarea class="form-control" type="text" id="berat" placeholder="Masukkan berat (kg)" name="berat"
                    required="required"></textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection

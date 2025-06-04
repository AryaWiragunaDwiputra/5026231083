@extends('template')
@section('content')
    <h3>Data Pegawai</h3>

    <a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="id1">
                Nama
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="nama" placeholder="Masukkan Nama Lengkap" name="nama"
                    required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="id1">
                Jabatan
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="jabatan" placeholder="Masukkan Jabatan" name="jabatan"
                    required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="id1">
                Umur
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="Umur" placeholder="Masukkan Umur" name="Umur"
                    required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="id1">
                Alamat
            </label>
            <div class="col-sm-6">
                <textarea class="form-control" type="text" id="alamat" placeholder="Masukkan Alamat Lengkap" name="alamat"
                    required="required"></textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection

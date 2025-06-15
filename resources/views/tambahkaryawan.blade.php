@extends('template')

@section('content')
    <h3 class="text-center">Tambah Data Karyawan</h3>

    <div class=" mb-3">
        <a href="/karyawan" class="btn btn-info">Kembali</a>
    </div>

    <form action="/karyawan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 mb-3">
                    <label for="kodepegawai">Kode Karyawan</label>
                    <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" placeholder="Masukkan Kode Karyawan" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="namalengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan Nama Lengkap" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="divisi">Divisi</label>
                    <input type="text" class="form-control text-truncate" id="divisi" name="divisi" placeholder="Masukkan Divisi (maksimal sesuai DB)" maxlength="50" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="departemen">Departemen</label>
                    <input type="text" class="form-control text-truncate" id="departemen" name="departemen" placeholder="Masukkan Departemen" maxlength="100" required>
                </div>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>
@endsection

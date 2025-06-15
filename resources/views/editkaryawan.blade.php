@extends('template')

@section('content')
    <h3 class="text-center">Edit Karyawan</h3>

    <div class=" mb-3">
        <a href="/karyawan" class="btn btn-info">Kembali</a>
    </div>

    @foreach($karyawan as $k)
    <div class="d-flex justify-content-center">
        <form action="/karyawan/update" method="post" class="form-horizontal w-100" style="max-width: 800px;">
            {{ csrf_field() }}

            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="kodepegawai">Kode Karyawan</label>
                        <input type="text" class="form-control" id="kodepegawai" name="kodepegawai"
                            value="{{ $k->kodepegawai }}" required readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="namalengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namalengkap" name="namalengkap"
                            value="{{ $k->namalengkap }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="divisi">Divisi</label>
                        <input type="text" class="form-control text-truncate" id="divisi" name="divisi"
                            value="{{ $k->divisi }}" maxlength="50" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="departemen">Departemen</label>
                        <input type="text" class="form-control text-truncate" id="departemen" name="departemen"
                            value="{{ $k->departemen }}" maxlength="100" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <input type="submit" value="Simpan Data" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
    </div>
    @endforeachAdd commentMore actions
@endsection

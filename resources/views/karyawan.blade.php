@extends('template')
@section('content')
<div class="container mt-4">
    <h3 class="mb-3">Data Karyawan</h3>

    {{-- Tabel Data --}}
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ ucfirst(strtolower($k->departemen)) }}</td>
                <td class="text-center">
                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus karyawan ini?')">
                        Hapus
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Tidak ada data karyawan ditemukan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Tombol Tambah --}}
    <div class="text-end mt-3">
        <a href="/karyawan/tambah" class="btn btn-primary">+ Tambah Karyawan Baru</a>
    </div>
</div>
@endsection

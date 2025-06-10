@extends('template')

@section('content')
    <h3>Data Minuman</h3>
    <a href="/minuman/tambah" class="btn btn-primary"> + Tambah Minumn Baru</a>

    <p>Cari Data Minuman :</p>
    <form action="/minuman/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Minuman ..">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Merk Minuman</th>
            <th>Harga Minuman</th>
            <th>Tersedia</th>
            <th>Berat (kg)</th>
            <th>Opsi</th>
        </tr>
        @foreach ($minuman as $item)
            <tr>
                <td>{{ $item->merkminuman }}</td>
                <td>{{ $item->hargaminuman }}</td>
                <td>{{ $item->tersedia }}</td>
                <td>{{ $item->berat }}</td>
                <td>
                    <a href="/minuman/edit/{{ $item->id }}" class="btn btn-success">Edit</a>
                    <a href="/minuman/hapus/{{ $item->id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $minuman->links() }}
@endsection

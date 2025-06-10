<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Minuman</h3>

	<a href="/minuman"> Kembali</a>

	<br/>
	<br/>

	@foreach($minuman as $item)
	<form action="/minuman/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $item->id }}"> <br/>
		Merk Minuman <input type="text" required="required" name="merk" value="{{ $item->merkminuman }}"> <br/>
		Harga Minuman <input type="text" required="required" name="harga" value="{{ $item->hargaminuman }}"> <br/>
		Tersedia <input type="number" required="required" name="tersedia" value="{{ $item->tersedia }}"> <br/>
		Berat (kg) <textarea required="required" name="berat">{{ $item->berat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>

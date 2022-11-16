<table border=1>
<th>ID</th>
<th>Nama</th>
<th>HargaBeli</th>
<th>HargaJual</th>

@foreach ($produk as $p)
<tr><td>{{ $p->id }}</td>
<td>{{ $p->nama }}</td>
<td>{{ $p->harga_beli }}</td>
<td>{{ $p->harga_jual }}</td> </tr>@endforeach
</table>

</body>
</html>
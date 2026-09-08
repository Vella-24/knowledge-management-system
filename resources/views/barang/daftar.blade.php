<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    @if(session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif

    <a href="{{ url('/tambah-barang') }}">
        Tambah Barang
    </a>

    <br><br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        @foreach ($barangs as $barang)
        <tr>
            <td>
                {{ $barang->nama }}
            </td>
            <td>
                {{ $barang->harga }}
            </td>
            <td>
                {{ $barang->stok }}
            </td>
            <td>
                {{ $barang->nama_kategori }}
            </td>
            <td>
                <form method="POST"
                    action="{{ route('barang.hapus', $barang->id) }}"
                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang {{ $barang->nama }}?');">

                    @method('DELETE')
                    @csrf

                    <input type="submit" value="Hapus">

                </form>
                <a href="{{ route('barang.ubah', $barang->id) }}">
                    [UBAH]
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
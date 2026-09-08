<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="POST" action="{{ url('/simpan-barang') }}">
        @csrf

        <table>
            <tr>
                <td>Nama Makanan</td>
                <td>
                    <input type="text" name="nama" required>
                </td>
            </tr>

            <tr>
                <td>Harga</td>
                <td>
                    <input type="number" name="harga" required>
                </td>
            </tr>

            <tr>
                <td>Stok</td>
                <td>
                    <input type="number" name="stok" required>
                </td>
            </tr>

           <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori_id" required>
                        <option value="">-- Pilih Kategori --</option>

                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">
                                {{ $kategori->nama }}
                            </option>
                        @endforeach

                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>

    </form>

</body>
</html>
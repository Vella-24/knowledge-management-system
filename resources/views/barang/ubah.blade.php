<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="POST" action="{{ url('/update-barang') }}">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $barang->id }}">

        <table>

            <tr>
                <td>Nama Barang</td>
                <td>
                    <input
                        type="text"
                        name="nama"
                        value="{{ $barang->nama }}"
                        required
                    >
                </td>
            </tr>

            <tr>
                <td>Harga</td>
                <td>
                    <input
                        type="number"
                        name="harga"
                        value="{{ $barang->harga }}"
                        required
                    >
                </td>
            </tr>

            <tr>
                <td>Stok</td>
                <td>
                    <input
                        type="number"
                        name="stok"
                        value="{{ $barang->stok }}"
                        required
                    >
                </td>
            </tr>

            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori_id" required>

                        <option value="">
                            -- Pilih Kategori --
                        </option>

                        @foreach ($kategoris as $kategori)

                            <option
                                value="{{ $kategori->id }}"
                                {{ $barang->kategori_id == $kategori->id ? 'selected' : '' }}
                            >
                                {{ $kategori->nama }}
                            </option>

                        @endforeach

                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="Update">
                </td>
            </tr>

        </table>

    </form>

</body>
</html>
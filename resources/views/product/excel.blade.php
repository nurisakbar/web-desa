<table>
        <thead>
        <tr><td colspan="2"></td></tr>
        <tr><td colspan="2"></td></tr>
        <tr><td colspan="2"></td></tr>
        <tr><td colspan="2"></td></tr>
        <tr><td colspan="2"></td></tr>
        <tr>
            <th>Name</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Price</th>
            <th>Berat</th>
            <th>Pemesanan Minimum</th>
            <th>Status</th>
            <th>Jumlah Stock</th>
            <th>Etalase</th>
            <th>Preorder</th>
            <th>Waktu Proses Preorder</th>
            <th>Kondisi</th>
            <th>Gambar 1</th>
            <th>Gambar 2</th>
            <th>Gambar 3</th>
            <th>Gambar 4</th>
            <th>Video 1</th>
            <th>Video 2</th>
            <th>Video 3</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>902</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>250</td>
                <td>1</td>
                <td>Stock Tersedia</td>
                <td>1000</td>
                <td>{{ $product->etalase->name }}</td>
                <td></td>
                <td>0</td>
                <td>Baru</td>
                <td>{{ $product->image1 }}</td>
                <td>{{ $product->image2 }}</td>
                <td>{{ $product->image3 }}</td>
                <td>{{ $product->image4 }}</td>
                <td>{{ $product->video1 }}</td>
                <td>{{ $product->video2 }}</td>
                <td>{{ $product->video3 }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
<h3>Laporan Realisasi Tahun 2019</h3>
<table>
    <tr>
        <th>Kode</th>
        <th>Sumber Pendapatan</th>
        <th>Jumlah</th>
    </tr>
    @foreach($pendapatan as $p)
    <tr>
        <td>{{ $p->kode_komponen}}</td>
        <td>{{ $p->nama_komponen}}</td>
        <td>{{ $p->nilai}}</td>
    </tr>
    @endforeach
</table>
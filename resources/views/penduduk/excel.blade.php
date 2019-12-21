<html>
    <head></head>
    <body>
        <table>
            <tr>
            <th>No KK</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tempat, TGL Lahir</th>
            <th>Agama</th>
            <th>Jenis Kelamin</th>
            <th>Dusun</th>
            </tr>
            @foreach($penduduk as $p)
            <tr>
                <td width="20">{{ $p->no_kk}}</td>
                <td width="20">{{ $p->nik}}</td>
                <td width="20">{{ $p->nama}}</td>
                <td width="20">{{ $p->tempat_lahir}}, {{ $p->tanggal_lahir}}</td>
                <td width="10">{{ $p->agama->agama}}</td>
                <td width="10">{{ $p->jenis_kelamin}}</td>
                <td width="10">{{ $p->dusun->nama_dusun}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
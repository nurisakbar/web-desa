<table class="table table-bordered">
    <tr>
        <td width="200">Kode Komponen</td>
        <td> {{ Form::text('kode_komponen',null,['class'=>'form-control','placeholder'=>'Kode Komponen'])}}</td>
    </tr>
    <tr>
        <td>Nama Komponen</td>
        <td> {{ Form::text('nama_komponen',null,['class'=>'form-control','placeholder'=>'Nama Komponen'])}}</td>
    </tr>
    <tr>
        <td>Jenis</td>
        <td> {{ Form::select('keterangan',['pendapatan'=>'Pendapatan','realisasi'=>'Realisasi'],null,['class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td></td>
        <td>
            <button type="submit" class="btn btn-danger">Simpan</button>
            <a href="/admin/komponendana" class="btn btn-danger">Kembali</a>
        </td>
    </tr>
</table>
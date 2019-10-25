<table class="table table-bordered">
    <tr>
        <td>NIK</td>
        <td> {{ Form::text('nik',null,['class'=>'form-control','pleceholder'=>'NIK'])}}</td>
    </tr>
    <tr>
        <td>jabatan</td>
        <td> {{ Form::text('jabatan',null,['class'=>'form-control','placeholder'=>'Nama Jabatan'])}}</td>
    </tr>
    <tr>
        <td></td>
        <td>
            <button type="submit" class="btn btn-danger">Simpan</button>
            <a href="/admin/penjabatdesa" class="btn btn-danger">Kembali</a>
        </td>
    </tr>
</table>
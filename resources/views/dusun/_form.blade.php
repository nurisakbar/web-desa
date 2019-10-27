<table class="table table-bordered">
    <tr>
        <td>Nama Dusun</td>
        <td> {{ Form::text('nama_dusun',null,['class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td></td>
        <td>
            <button type="submit" class="btn btn-danger">Simpan</button>
            <a href="/admin/dusun" class="btn btn-danger">Kembali</a>
        </td>
    </tr>
</table>
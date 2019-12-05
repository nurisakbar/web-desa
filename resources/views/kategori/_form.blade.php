<table class="table table-bordered">
    <tr>
        <td>Nama Kategori</td>
        <td> {{ Form::text('nama_kategori',null,['class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td></td>
        <td>
            <button type="submit" class="btn btn-danger">Simpan</button>
            <a href="/admin/kategori" class="btn btn-danger">Kembali</a>
        </td>
    </tr>
</table>
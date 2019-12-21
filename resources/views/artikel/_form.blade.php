<table class="table table-bordered">
    <tr>
        <td>Judul</td>
        <td> {{ Form::text('judul',null,['class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td>Kategori</td>
        <td> {{ Form::select('id_kategori',$kategori,null,['class'=>'form-control']) }} </td>
    </tr>
    <tr>
        <td>artikel</td>
        <td>{{ Form::textarea('artikel',null,['class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td>Gambar</td>
        <td>{{ Form::file('gambar')}}</td>
    </tr>
    <tr>
        <td></td>
        <td>
            <button type="submit" class="btn btn-danger">Simpan</button>
            <a href="/admin/artikel" class="btn btn-danger">Kembali</a>
        </td>
    </tr>
</table>
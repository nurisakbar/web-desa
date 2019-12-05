<table class="table table-bordered">
    <tr>
        <td>Judul Arsip</td>
        <td> {{ Form::text('judul',null,['class'=>'form-control'])}}</td>
    </tr>
   
    <tr>
        <td>File Arsip</td>
        <td>{{ Form::file('nama_file')}}</td>
    </tr>
    <tr>
        <td></td>
        <td>
            <button type="submit" class="btn btn-danger">Simpan</button>
            <a href="/admin/arsip" class="btn btn-danger">Kembali</a>
        </td>
    </tr>
</table>
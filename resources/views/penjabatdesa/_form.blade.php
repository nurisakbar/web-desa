<table class="table table-bordered">
    <tr>
        <td>NIK</td>
        <td> 
                <input list="penduduk" name="nik" placeholder="Masukan Nama Penduduk" class="form-control">
                <datalist id="penduduk">
                    @foreach($penduduk as $p)
                        <option value="{{ $p->nik}} | {{ $p->nama}}">
                    @endforeach
                </datalist>
        </td>
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
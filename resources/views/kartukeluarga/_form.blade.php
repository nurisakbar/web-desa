<div class="row">
    <div class="col-md-8">
            <table class="table table-bordered">
                    <tr>
                        <td>Nomor KK</td>
                        <td> {{ Form::text('nomor_kk',null,['class'=>'form-control','placeholder'=>'Nomor KK'])}}</td>
                    </tr>
                    <tr>
                        <td>Nama Kepala Keluarga</td>
                        <td> {{ Form::text('nama_kk',null,['class'=>'form-control','placeholder'=>'Nama Kepala Keluarga'])}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td> {{ Form::text('alamat',null,['class'=>'form-control','placeholder'=>'Alamat'])}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-danger">Simpan</button>
                            <a href="/admin/kartukeluarga" class="btn btn-danger">Kembali</a>
                        </td>
                    </tr>
                </table>
    </div>
    <div class="col-md-4">
        <table>
            <tr>
                <td></td>
            </tr>
        </table>
    </div>
</div>

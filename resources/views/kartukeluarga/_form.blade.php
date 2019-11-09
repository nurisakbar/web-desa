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
            <table class="table table-bordered">
                    <tr><th colspan="2">Alamat Desa</th></th>
                    <tr>
                        <td width="150">Provinsi</td>
                        <td>{{ $region->province_name}}</td>
                    </tr>
                    <tr>
                        <td>Kabupaten</td>
                        <td>{{ $region->regency_name}}</td>
                    </tr>
                        <td>Kecamatan</td>
                        <td>{{ $region->district_name}}</td>
                    </tr>
                    <tr>
                        <td>Desa</td>
                        <td>{{ $region->village_name}}</td>
                    </tr>
                </table>
    </div>
</div>

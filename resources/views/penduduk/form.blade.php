@php
$btnLabel = isset($role)?'Update':'Create'; 
@endphp


<table class='table table-bordered'>
    <tr>
        <td>NIK Dan KK</td>
        <td>
            <div class="row">
                <div class="col-md-4">
                    {{ Form::text('nik',null,['placeholder'=>'NIK','class'=>'form-control'])}}
                </div>
                <div class="col-md-4">
                    {{ Form::text('nomor_kk',null,['placeholder'=>'Nomor KK','class'=>'form-control'])}}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>{{ Form::text('nama',null,['placeholder'=>'Nama Lengkap','class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>
            <div class="row">
                <div class="col-md-4">
                    {{ Form::text('tempat_lahir',null,['placeholder'=>'Tempat Lahir','class'=>'form-control'])}}
                </div>
            <div class="col-md-4">
                    {{ Form::date('tanggal_lahir',null,['placeholder'=>'Tanggal Lahir','class'=>'form-control'])}}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>Pendidikan Dan Pekerjaan</td>
        <td>
            <div class="row">
                <div class="col-md-4">
                        {{ Form::select('pendidikan_id',$pendidikan,null,['class'=>'form-control'])}}
                </div>
                <div class="col-md-4">
                        {{ Form::select('pekerjaan_id',$pekerjaan,null,['class'=>'form-control'])}}
                </div>
            </div>
           </td>
    </tr>
    <tr>
        <td>Agama Dan Status Kawin</td>
        <td>
            <div class="row">
                <div class="col-md-4">
                    {{ Form::select('agama_id',$agama,null,['class'=>'form-control'])}}
                </div>
                <div class="col-md-4">
                    {{ Form::select('status_kawin_id',$statusKawin,null,['class'=>'form-control'])}}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>Nama Ayah Dan Ibu</td>
        <td>
            <div class="row">
                <div class="col-md-4">
                    {{ Form::text('nama_ayah',null,['placeholder'=>'Nama Ayah','class'=>'form-control'])}}
                </div>
                <div class="col-md-4">
                    {{ Form::text('nama_ibu',null,['placeholder'=>'Nama Ibu','class'=>'form-control'])}}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>No Passport Dan Kitap )*</td>
        <td>
            <div class="row">
                <div class="col-md-4">
                    {{ Form::text('no_passport',null,['placeholder'=>'Nomor Kitap','class'=>'form-control'])}}
                </div>
                <div class="col-md-4">
                    {{ Form::text('kitap',null,['placeholder'=>'No Passport','class'=>'form-control'])}}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            {{ Form::submit($btnLabel,['class'=>'btn btn-success'])}}
            {{ link_to('/admin/penduduk','Kembali',['class'=>'btn btn-info'])}}
        </td>
    </tr>
</table>
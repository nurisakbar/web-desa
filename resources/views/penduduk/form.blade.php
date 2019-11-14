@php
$btnLabel = isset($penduduk)?'Update':'Create';
$kk       = isset($penduduk)?"value=".$penduduk->no_kk." disabled":'';
@endphp

@include('alert')
<table class='table table-bordered'>
    <tr>
        <td>NIK Dan KK</td>
        <td>
            <div class="row">
                <div class="col-md-4">
                    @if(isset($penduduk))
                    
                        {{ Form::text('nik',null,['placeholder'=>'NIK','class'=>'form-control','disabled'=>'disabled'])}}
                    @else
                    
                        {{ Form::text('nik',null,['placeholder'=>'NIK','class'=>'form-control'])}}
                    @endif
                </div>
                <div class="col-md-5">
                    <input list="kk" {{ $kk}} name="no_kk" placeholder="Masukan Nomor KK" class="form-control">
                    <datalist id="kk">
                        @foreach($kartu_keluarga as $kk)
                            <option value="{{ $kk->nomor_kk}} | {{ $kk->nama_kk}}">
                        @endforeach
                    </datalist>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>{{ Form::text('nama',null,['placeholder'=>'Nama Lengkap','class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>
            <input type="radio" name="jenis_kelamin" value="laki-laki" checked> Laki Laki
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
        </td>
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
                        {{ Form::select('jenis_pekerjaan_id',$pekerjaan,null,['class'=>'form-control'])}}
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
        <td>Status Hubungan Dalam Keluarga</td>
        <td>
            {{ Form::select('status_hubungan',$statusHubungan,null,['class'=>'form-control'])}}
        </td>
    </tr>
    <tr>
        <td>Kewarganegaraan</td>
        <td>
            <div class="row">
            <div class="col-md-5">
                {{ Form::select('kewarganegaraan',['wni'=>'Warga Negara Indonesia','wna'=>'Warga Negara Asing'],null,['class'=>'form-control','id'=>'kewarganegaraan','onchange'=>'ShowInputPassport()'])}}
                
            </div>
            </div>
        </td>
    </tr>
    <tr class="passport">
        <td>No Passport Dan Kitap )*</td>
        <td>
            <div class="row">
                <div class="col-md-4">
                    {{ Form::text('no_passport',null,['placeholder'=>'Nomor Kitap','class'=>'form-control'])}}
                </div>
                <div class="col-md-4">
                    {{ Form::text('no_kitap',null,['placeholder'=>'No Passport','class'=>'form-control'])}}
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
@push('js')
<script>
    $(document).ready(function(){
        ShowInputPassport();
        var kewarganegaraan = $("#kewarganegaraan").val();
        console.log(kewarganegaraan);
      });
</script>

<script>

    function ShowInputPassport()
    {
        var kewarganegaraan = $("#kewarganegaraan").val();
        if(kewarganegaraan=='wni')
        {
            $(".passport").hide();
        }else
        {
            $(".passport").show();
        }
    }
</script>
@endpush
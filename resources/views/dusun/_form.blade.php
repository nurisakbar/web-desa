<?php
$pendudu = isset($dusun)?"value=".$dusun->penduduk->nama."":'';
?>
    @include('alert')
    <div class="row">
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    <td>Nama Dusun</td>
                    <td>
    
                        {{ Form::text('nama_dusun',null,['class'=>'form-control','placeholder'=>'Nama Dusun'])}}
    
                    </td>
                </tr>
                <tr>
                    <td>Kepala Dusun</td>
                    <td>
                        <input type="text" id="nama_penduduk" placeholder="Masukan Nama Warga" name="nama" class="form-control" value="{{ isset($dusun)==null?null:$dusun->penduduk->nama}}">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-danger">Simpan</button>
                        <a href="/admin/dusun" class="btn btn-danger">Kembali</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-4">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <b>Informasi</b>
                <hr> Silahkan Masukan Nama Atau Nik Penduduk Pada Kolom Kepala Dusun
            </div>
        </div>
    </div>


    @push('js')
<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<script>
        $(function() {
          $( "#nama_penduduk" ).autocomplete({
            source: '/admin/penduduk/cari'
          });
        });
        </script>
@endpush
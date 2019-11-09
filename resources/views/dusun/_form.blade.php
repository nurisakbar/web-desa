<?php
$pendudu = isset($dusun)?"value=".$dusun->penduduk->nama."":'';
?>
    @include('alert')
    <div class="row">
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    <td>Kode & Nama Dusun</td>
                    <td>
                        <div class="row">
                            <div class="col-md-3">
                                {{ Form::text('kode_dusun',null,['class'=>'form-control','placeholder'=>'Kode Dusun'])}}
                            </div>
                            <div class="col-md-8">
                                {{ Form::text('nama_dusun',null,['class'=>'form-control','placeholder'=>'Nama Dusun'])}}
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Kepala Dusun</td>
                    <td>
                        <input list="penduduk" {{ $pendudu}} name="nik" placeholder="Cari Penduduk" class="form-control">
                        <datalist id="penduduk">
                            @foreach($penduduk as $pp)
                            <option value="{{ $pp->nik}} | {{ $pp->nama}}">
                                @endforeach
                        </datalist>
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
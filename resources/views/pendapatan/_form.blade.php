<div class="row">
    <div class="col-md-8">
            <table class="table table-bordered">
                    <tr>
                        <td>Komponen Dana</td>
                        <td>
                            @if(isset($pendapatan))
                            <input type="text" value="{{ $pendapatan->nama_komponen}}" id="komponen" placeholder="Masukan Nama Komponen" name="komponen_dana_id" class="form-control" disabled>
                            @else
                                <input type="text" id="komponen" placeholder="Masukan Nama Komponen" name="komponen_dana_id" class="form-control">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td width="200">Jumlah Pemasukan / Tahun</td>
                        <td>
                            <div class="row">
                                <div class="col-md-5">
                                        {{ Form::text('nilai',null,['class'=>'form-control','placeholder'=>'Jumlah Pemasukan'])}}
                                </div>
                                <div class="col-md-4">
                                        @if(isset($pendapatan))
                                            {{ Form::text('tahun',null,['class'=>'form-control','placeholder'=>'Tahun'])}}
                                        @else
                                            {{ Form::text('tahun',date('Y'),['class'=>'form-control','placeholder'=>'Tahun'])}}
                                        @endif
                                        
                                </div>
                            </div> 
                            </td>
                    </tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-danger">Simpan</button>
                            <a href="/admin/pendapatan" class="btn btn-danger">Kembali</a>
                        </td>
                    </tr>
                </table>
    </div>
    <div class="col-md-4">
            <div class="alert alert-primary" role="alert">
                    <b>Perhatian</b> : <hr> Nama Komponen Diambil Dari Data Komponen Keuangan<br> Silahkan Ketik Nama Komponen Dan Pilih
                  </div>
    </div>
</div>

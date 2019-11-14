<div class="row">
    <div class="col-md-8">
            <table class="table table-bordered">
                    <tr>
                        <td>Komponen Dana</td>
                        <td>
                            <input list="komponen" class="form-control" name="komponen_dana_id" placeholder="Nama Komponen">
                            <datalist id="komponen">
                                @foreach($komponenDana as $komponen)
                                <option value="{{ $komponen->nama_komponen}}">
                                @endforeach
                            </datalist>
                        </td>
                    </tr>
                    <tr>
                        <td width="200">Jumlah Pemasukan</td>
                        <td> {{ Form::text('nilai',null,['class'=>'form-control','placeholder'=>'Jumlah Pemasukan'])}}</td>
                    </tr>
                    <tr>
                            <td width="200">Tahun</td>
                            <td> {{ Form::text('tahun',null,['class'=>'form-control','placeholder'=>'Tahun'])}}</td>
                        </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-danger">Simpan</button>
                            <a href="/admin/artikel" class="btn btn-danger">Kembali</a>
                        </td>
                    </tr>
                </table>
    </div>
    <div class="col-md-4">
            <div class="alert alert-primary" role="alert">
                    <b>Perhatian</b> : <br> Nama Komponen Diambil Dari Data Komponen Keuangan<br> Silahkan Ketik Nama Komponen Dan Pilih
                  </div>
    </div>
</div>

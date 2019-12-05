<table class="table table-bordered">
    <tr>
        <td>Nama Penjabat</td>
        <td> 
            <input type="text" id="nama_penduduk" placeholder="Masukan Nama Warga" name="nama" class="form-control" >
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
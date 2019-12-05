@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Penjabat Desa</div>

                <div class="card-body">
                @include('alert')
                @include('validation')
                    {{ Form::model($penjabatDesa,['url'=>'/admin/penjabatdesa/'.$penjabatDesa->id,'files'=>true,'method'=>'PUT'])}}

                    <table class="table table-bordered">
                        <tr>
                            <td>NIK</td>
                            <td> 
                                    <input list="penduduk" value="{{ $penjabatDesa->penduduk->nama }}" name="nik" placeholder="Masukan Nama Penduduk" class="form-control">
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

                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'artikel' );
</script>
@endpush

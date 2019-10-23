@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Penjabat Desa</div>

                <div class="card-body">

                    @include('alert')

                    <a href="/admin/penjabatdesa/create" class="btn btn-info">Penjabat Desa</a>
                    <hr>
                    <table class="table table-bordered" id="example">
                            <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penjabatDesa as $row)
                        <tr>
                            <td width="120">{{ $row->nik}}</td>
                            <td>{{$row->penduduk->nama}}</td>
                            <td>{{$row->jabatan}}</td>
                            <td width="80"><a href="/admin/penjabatdesa/{{$row->id}}/edit" class="btn btn-danger">Edit</a></td>
                            <td width="80">
                                {{ Form::open(['url'=>'/admin/penjabatdesa/'.$row->id,'method'=>'delete'])}}
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                {{ Form::close()}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@endpush

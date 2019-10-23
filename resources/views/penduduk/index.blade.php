@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Penduduk</div>

                <div class="card-body">

                    @include('alert')

                    <a href="/admin/penduduk/create" class="btn btn-info">Tambah Data Penduduk</a>
                    <hr>
                    <table class="table table-bordered" id="example">
                            <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>No KK</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penduduk as $row)
                        <tr>
                            <td width="120">{{ $row->nik}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->no_kk}}</td>
                            <td>{{$row->tanggal_lahir}}</td>
                            <td></td>
                            <td></td>
                            <td width="80"><a href="/admin/penjabatdesa/{{$row->nik}}/edit" class="btn btn-danger">Edit</a></td>
                            <td width="80">
                                {{ Form::open(['url'=>'/admin/penjabatdesa/'.$row->nik,'method'=>'delete'])}}
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

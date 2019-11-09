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
                        <th>No KK</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($penduduk as $row)
                     <tr>
                        <td>{{$row->no_kk}}</td>
                        <td width="120">{{ $row->nik}}</td>
                        <td>{{$row->nama}}</td>
                        <td>{{date_format(date_create($row->tanggal_lahir),"m-d-Y")}}</td>
                        <td>{{$row->nama_ayah}}</td>
                        <td>{{$row->nama_ibu}}</td>
                        <td>
                           <div class="dropdown show">
                              <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pilih Aksi
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                 <a href="/admin/penduduk/{{$row->nik}}/edit" class="dropdown-item"><i class="fas fa-edit"></i> Edit</a>
                                 {{ Form::open(['url'=>'/admin/penduduk/'.$row->nik,'method'=>'delete'])}}
                                 <button type="submit" class="dropdown-item"><i class="fas fa-trash-alt"></i> Hapus</button>
                                 {{ Form::close()}}
                              </div>
                           </div>
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
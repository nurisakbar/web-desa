@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">Daftar Penjabat Desa</div>
            <div class="card-body">
               @include('alert')
               @if(Auth::user()->admin==1)
               <a href="/admin/penjabatdesa/create" class="btn btn-info">Penjabat Desa</a>
               <hr>
               @endif
               <table class="table table-bordered" id="example">
                  <thead>
                     <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($penjabatDesa as $row)
                     <tr>
                        <td width="150">{{ $row->nik}}</td>
                        <td width="300">{{$row->penduduk->nama}}</td>
                        <td>{{$row->jabatan}}</td>
                        <td>
                           <div class="dropdown show">
                              <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pilih Aksi
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                 <a href="/admin/penjabatdesa/{{$row->id}}/edit" class="dropdown-item"><i class="fas fa-edit"></i> Edit</a>
                                 {{ Form::open(['url'=>'/admin/penjabatdesa/'.$row->id,'method'=>'delete'])}}
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
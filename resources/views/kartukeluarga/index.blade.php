@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">Kartu Keluarga</div>
            <div class="card-body">
               @include('alert')
               <a href="/admin/kartukeluarga/create" class="btn btn-info">Tambah Data</a>
               <hr>
               <table class="table table-bordered" id="example">
                  <thead>
                     <tr>
                        <th width="150">Nomor KK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Taraf Kehidupan</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($kartuKeluarga as $row)
                     <tr>
                        <td>{{$row->nomor_kk}}</td>
                        <td>{{$row->nama_kk}}</td>
                        <td>{{ $row->alamat}}</td>
                        <td>{{ $row->tarafkehidupan->taraf_kehidupan}}</td>
                        <td>
                           <div class="dropdown show">
                              <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pilih Aksi
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                 <a href="/admin/kartukeluarga/{{$row->nomor_kk}}/edit" class="dropdown-item"><i class="fas fa-edit"></i> Edit</a>
                                 {{ Form::open(['url'=>'/admin/kartukeluarga/'.$row->nomor_kk,'method'=>'delete'])}}
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
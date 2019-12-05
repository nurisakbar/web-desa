@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">Laporan Realisasi Keuangan</div>
            <div class="card-body">
               @include('alert')
               <a href="/admin/realisasi/create" class="btn btn-info">Tambah Data Realisasi</a>
               <hr>
               <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <th width="180">Kode</th>
                        <th>Sumber Pendapatan</th>
                        <th>Nilai</th>
                        <th>Tahun</th>
                        <th width="100">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($realisasi as $row)
                     <tr>
                        <td>{{$row->kode_komponen}}</td>
                        <td>{{$row->nama_komponen}}</td>
                        <td>{{ $row->nilai }}</td>
                        <td>2019</td>
                        <td>
                           <div class="dropdown show">
                              <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pilih Aksi
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                           
                                 {{ Form::open(['url'=>'/admin/pendapatan/'.$row->kode_komponen,'method'=>'delete'])}}
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
   $(document).ready(function() {
       $('#example').DataTable();
   } );
</script>
@endpush
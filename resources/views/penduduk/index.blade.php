@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">Daftar Penduduk</div>
            <div class="card-body">
               @include('alert')
               @if(Auth::user()->admin==1)
               <a href="/admin/penduduk/create" class="btn btn-info">Tambah Data Penduduk</a>
               
               @endif
               {{-- <a href="/admin/penduduk/pdf" class="btn btn-danger">Laporan PDF ALL</a> --}}
               {{-- <a href="/admin/penduduk/excel" class="btn btn-info">Laporan Excel</a> --}}
               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                  Laporan PDF
                </button>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModa2">
                     Laporan Excel
                   </button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       {{ Form::open(['url'=>'admin/penduduk/pdf','method'=>'GET'])}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laporan Penduduk Berdasarkan Dusun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
           <tr>
              <td>Pilih Dusun</td>
              <td>{{ Form::select('dusun_id',$dusun,null,['class'=>'form-control'])}}</td>
           </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a href="/admin/penduduk/pdf" class="btn btn-danger">Export Semua</a>
        <button type="submit" class="btn btn-danger">Filter Laporan Berdasarkan Dusun</button>
      </div>
      {{ Form::close()}}
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       {{ Form::open(['url'=>'admin/penduduk/excel','method'=>'GET'])}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laporan Penduduk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
           <tr>
              <td>Pilih Dusun</td>
              <td>{{ Form::select('dusun_id',$dusun,null,['class'=>'form-control'])}}</td>
           </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a href="/admin/penduduk/excel" class="btn btn-success">Export Semua</a>
        <button type="submit" class="btn btn-success">Filter Laporan Berdasarkan Dusun</button>
      </div>
      {{ Form::close()}}
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
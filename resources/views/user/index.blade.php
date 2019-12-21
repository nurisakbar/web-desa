@extends('layouts.app')
@section('content')
<div class="container">
<<<<<<< HEAD
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        @include('alert')
    
                        <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <td colspan="2"></td>
                                </tr>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user['name']}}</td>
                                    <td>{{ $user['email']}}</td>
                                    <td>{{ $user->created_at }}</td>
                                    {{--  <td width="40"><a href="admin/user/{{ $user->id}}/edit" class="btn btn-info"><i class="far fa-edit"></i></a></td>  --}}
                                    <td width="40">
                                        {{ Form::open(['url'=>'admin/user/'.$user->id,'method'=>'delete'])}}
                                          <button class="btn btn-warning"><i class="fas fa-trash-alt"></i></button>
                                        {{ Form::close()}}
                                    </td>
                                </tr>
                                @endforeach
                        </table>

                        <div class="row">
                            <div class="col-md-2">
                                {{ link_to('/admin/user/create','Create User',['class'=>'btn btn-danger'])}}
                            </div>
                            <div class="col-md-10">
                                {{ $users->links()}}
                            </div>
                        </div>
                    </div>
                </div>
=======
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">Daftar Kategori</div>
            <div class="card-body">
               @include('alert')
               <a href="/admin/user/create" class="btn btn-info">Tambah User</a>
               <hr>
               <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th width="100">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($users as $row)
                     <tr>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->created_at}}</td>
                        <td>
                           <div class="dropdown show">
                              <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pilih Aksi
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                 <a class="dropdown-item" href="/admin/user/{{$row->id}}/edit"><i class="fas fa-edit"></i> Edit</a>
                                 {{ Form::open(['url'=>'admin/user/'.$row->id,'method'=>'delete'])}}
                                 <button type="submit" class="dropdown-item"><i class="fas fa-trash-alt"></i> Hapus</button>
                                 {{ Form::close()}}
                              </div>
                           </div>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
>>>>>>> 6a310f1d9fc33261da7c2bf6b01bae6ecc45b15f
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
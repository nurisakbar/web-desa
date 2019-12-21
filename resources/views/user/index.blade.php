@extends('layouts.app')
@section('title','list users')
@section('content')
<div class="container">
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
            </div>
        </div>
    </div>
@endsection
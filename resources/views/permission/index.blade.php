@extends('layouts.app')
@section('title','list permissions')
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
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Display Name</th>
                                    <th>Description</th>
                                    <td colspan="2"></td>
                                </tr>
                                @foreach($permissions as $permission)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $permission->name}}</td>
                                    <td>{{ $permission->display_name}}</td>
                                    <td>{{ $permission->description }}</td>
                                    <td width="40"><a href="permission/{{ $permission->id}}/edit" class="btn btn-info"><i class="far fa-edit"></i></a></td>
                                    <td width="40">
                                        {{ Form::open(['url'=>'permission/'.$permission->id,'method'=>'delete'])}}
                                          <button class="btn btn-warning"><i class="fas fa-trash-alt"></i></button>
                                        {{ Form::close()}}
                                    </td>
                                </tr>
                                @endforeach
                        </table>

                        <div class="row">
                            <div class="col-md-2">
                                {{ link_to('permission/create','Create permission',['class'=>'btn btn-danger'])}}
                            </div>
                            <div class="col-md-10">
                                {{ $permissions->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
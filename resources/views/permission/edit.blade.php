@extends('layouts.app')
@section('title','Edit User')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                            
                        @include('validation')

                        

                        {{ Form::model($permission,['url'=>'permission/'.$permission->id,'method'=>'PUT'])}}
                    
                        @include('permission.form')
                        
                        {{ Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
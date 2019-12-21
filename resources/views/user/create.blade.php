@extends('layouts.app')
@section('title','Input User')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                            
                        @include('validation')

<<<<<<< HEAD
                        {{ Form::open(['url'=>'/admin/user','files'=>true])}}
=======
                        {{ Form::open(['url'=>'admin/user','files'=>true])}}
>>>>>>> 6a310f1d9fc33261da7c2bf6b01bae6ecc45b15f
                    
                        @include('user.form')
                        
                        {{ Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
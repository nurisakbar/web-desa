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

                        {{ Form::open(['url'=>'/admin/user','files'=>true])}}
                    
                        @include('user.form')
                        
                        {{ Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
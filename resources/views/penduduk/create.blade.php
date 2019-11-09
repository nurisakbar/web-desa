@extends('layouts.app')
@section('title','Input Data Penduduk')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Input Data Penduduk</div>
    
                    <div class="card-body">
                            
                        @include('validation')

                        {{ Form::open(['url'=>'/admin/penduduk','files'=>true]) }}
                    
                        @include('penduduk.form')
                        
                        {{ Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
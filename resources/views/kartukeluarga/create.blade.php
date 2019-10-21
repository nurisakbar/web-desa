@extends('layouts.app')
@section('title','Kartu keluarga')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Kartu Keluarga</div>

                <div class="card-body">

                    {{ Form::open(['url'=>'/admin/kartukeluarga','files'=>true])}}

                    @include('kartukeluarga._form')

                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
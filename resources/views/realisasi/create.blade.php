@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Dana Masuk</div>

                <div class="card-body">
                    @include('validation')

                    {{ Form::open(['url'=>'/admin/realisasi','files'=>true])}}

                    @include('realisasi._form')

                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

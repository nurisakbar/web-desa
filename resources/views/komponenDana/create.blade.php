@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Artikel Baru</div>

                <div class="card-body">
                    @include('validation')

                    {{ Form::open(['url'=>'/admin/komponendana','files'=>true])}}

                    @include('komponenDana._form')

                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

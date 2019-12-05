@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Komponen Dana</div>

                <div class="card-body">
                    @include('validation')

                    {{ Form::model($komponendana,['url'=>'/admin/komponendana/'.$komponendana->kode_komponen,'files'=>true,'method'=>'PUT'])}}

                    @include('komponendana._form')

                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
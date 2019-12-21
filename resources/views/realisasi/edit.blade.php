@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Realisasi</div>

                <div class="card-body">
                    @include('validation')

                    {{ Form::model($realisasi,['url'=>'/admin/realisasi/'.$realisasi->id,'files'=>true,'method'=>'PUT'])}}

                    @include('realisasi._form')

                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
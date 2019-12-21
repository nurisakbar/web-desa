@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Pendapatan</div>

                <div class="card-body">
                    @include('validation')

                    {{ Form::model($pendapatan,['url'=>'/admin/pendapatan/'.$pendapatan->id,'files'=>true,'method'=>'PUT'])}}

                    @include('pendapatan._form')

                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
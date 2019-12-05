@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Arsip Baru</div>

                <div class="card-body">
                    @include('validation')

                    {{ Form::open(['url'=>'/admin/arsip','files'=>true])}}

                    @include('arsip._form')

                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'arsip' );
</script>
@endpush

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Dana Masuk</div>

                <div class="card-body">
                    @include('validation')
                    @include('alert')

                    {{ Form::open(['url'=>'/admin/pendapatan','files'=>true])}}

                    @include('pendapatan._form')

                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<script>
        $(function() {
          $( "#komponen" ).autocomplete({
            source: '/admin/komponen/cari/pendapatan'
          });
        });
        </script>
@endpush

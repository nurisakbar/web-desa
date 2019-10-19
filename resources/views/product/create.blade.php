@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    {{ Form::open(['url'=>'product'])}}

                    <table class="table table-bordered">
                        <tr>
                            <td>Product Name</td>
                            <td> {{ Form::text('name',null,['class'=>'form-control'])}}</td>
                        </tr>
                        <tr>
                            <td>Etalase</td>
                            <td>{{ Form::select('etalase_id',$etalase,null,['class'=>'form-control'])}}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ Form::textarea('description',null,['class'=>'form-control'])}}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>{{ Form::text('price',null,['class'=>'form-control'])}}</td>
                        </tr>
                        <tr>
                            <td>Link Image 1</td>
                            <td>{{ Form::text('image1',null,['class'=>'form-control','placeholder'=>'Image 1'])}}</td>
                        </tr>
                        <tr>
                            <td>Link Image 2</td>
                            <td>{{ Form::text('image2',null,['class'=>'form-control','placeholder'=>'Image 2'])}}</td>
                        </tr>
                        <tr>
                            <td>Link Image 3</td>
                            <td>{{ Form::text('image3',null,['class'=>'form-control','placeholder'=>'Image 4'])}}</td>
                        </tr>
                        <tr>
                            <td>Link Image 4</td>
                            <td>{{ Form::text('image4',null,['class'=>'form-control','placeholder'=>'Image 4'])}}</td>
                        </tr>
                        <tr>
                                <td>Link Video 1</td>
                                <td>{{ Form::text('video1',null,['class'=>'form-control','placeholder'=>'Video 1'])}}</td>
                            </tr>
                            <tr>
                                <td>Link Video 2</td>
                                <td>{{ Form::text('video2',null,['class'=>'form-control','placeholder'=>'Video 2'])}}</td>
                            </tr>
                            <tr>
                                <td>Link Video 3</td>
                                <td>{{ Form::text('video3',null,['class'=>'form-control','placeholder'=>'Video 4'])}}</td>
                            </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-danger">Simpan</button>
                                <a href="/product" class="btn btn-danger">Kembali</a>
                            </td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

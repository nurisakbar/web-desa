@extends('layouts.app') @section('title','Setting') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Setting Webiste</div>

                <div class="card-body">
                    @include('alert')
                    <table class="table table-bordered">
                        <tr><th colspan="2">Alamat Desa</th></th>
                        <tr>
                            <td width="200">Provinsi</td>
                            <td>{{ $region->province_name}}</td>
                        </tr>
                        <tr>
                            <td>Kabupaten</td>
                            <td>{{ $region->regency_name}}</td>
                        </tr>
                            <td>Kecamatan</td>
                            <td>{{ $region->district_name}}</td>
                        </tr>
                        <tr>
                            <td>Desa</td>
                            <td>{{ $region->village_name}} | <a href=''>Ubah</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
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
                            <td>{{ $region->village_name}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Ganti Nama Desa</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">Setting Nama Desa</h4>
      </div>
      {{ Form::open(['setting'])}}
      <div class="modal-body">
        <input list="villages"  name="village" class="form-control" placeholder="Cari Nama Desa">
        <datalist id="villages">
            @foreach($vregion as $rg)
            <option value="{{ $rg->village_name}}, {{ $rg->district_name}}, {{ $rg->regency_name}}, {{ $rg->province_name}}, {{ $rg->id}}">
            @endforeach
          </datalist>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Simpan</button>
      </div>
      {{ Form::close()}}
    </div>

  </div>
</div>
@endsection
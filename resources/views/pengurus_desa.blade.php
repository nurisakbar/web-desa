<h3>Pengurus Desa</h3>
<div class="row">
    @foreach($penjabat as $row)
        <div class="col-md-3">
            <img src="http://images.clipartpanda.com/male-black-hair-clipart-male_user_icon_clip_art.jpg">
            <hr>
            {{ $row->nama }}<br>{{ $row->jabatan }}
        </div>
    @endforeach
</div>
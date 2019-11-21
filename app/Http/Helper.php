<?php
function setting()
{
    $data['setting'] = \DB::table('setting')->find(1);
    $data['region'] = \DB::table('view_region')->where('id',$data['setting']->village_id)->first();
    return $data['region'];
}


function hitungJmlPendudukByPendidikan($pendidikanId,$gender=null)
{
    if($gender==null)
    {
        return \DB::table('penduduk')->where('pendidikan_id',$pendidikanId)->count();
    }else
    {
        return \DB::table('penduduk')->where('pendidikan_id',$pendidikanId)->where('jenis_kelamin',$gender)->count();
    }
}

function hitungJmlPendudukByPekerjaan($pekerjaanId,$gender=null)
{
    if($gender==null)
    {
        return \DB::table('penduduk')->where('jenis_pekerjaan_id',$pekerjaanId)->count();
    }else
    {
        return \DB::table('penduduk')->where('jenis_pekerjaan_id',$pekerjaanId)->where('jenis_kelamin',$gender)->count();
    }
}

function hitungJmlPendudukByStatusKawin($statusKawin,$gender=null)
{
    if($gender==null)
    {
        return \DB::table('penduduk')->where('status_kawin_id',$statusKawin)->count();
    }else
    {
        return \DB::table('penduduk')->where('status_kawin_id',$statusKawin)->where('jenis_kelamin',$gender)->count();
    }
}

function formatRupiah($rupiah)
{
    $format = "Rp " . number_format($rupiah, 0,'.','.');
}
?>
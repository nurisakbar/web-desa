<?php
function setting()
{
    $data['setting'] = \DB::table('setting')->find(1);
    $data['region'] = \DB::table('view_region')->where('id',$data['setting']->village_id)->first();
    return $data['region'];
}
?>
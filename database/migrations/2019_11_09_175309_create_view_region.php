<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewRegion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("create view view_region as select v.id,v.name as village_name,d.name as district_name,r.name as regency_name,p.name as province_name
        from villages as v
        left JOIN districts as d on d.id=v.district_id
        left join regencies as r on r.id=d.regency_id
        left join provinces as p on p.id=r.province_id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_region');
    }
}

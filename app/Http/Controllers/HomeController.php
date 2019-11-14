<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function setting()
    {
        $data['setting'] = \DB::table('setting')->find(1);
        $data['region'] = \DB::table('view_region')->where('id',$data['setting']->village_id)->first();
        $data['vregion'] = \DB::table('view_region')->get();
        return view('setting',$data);
    }

    public function savesetting(Request $request)
    {
        \DB::table('setting')->where('id',1)->update(['village_id'=>trim(explode(',',$request->village)[4])]);
        return redirect('/admin/setting')->with('message','Perubahan Sudah Disimpan');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dusun;

class DusunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['dusun'] = Dusun::all();
        return view('dusun.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dusun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'Data :attribute Tidak Boleh Ada Yang Kosong',
        ];

        $request->validate([
             'nama_dusun' => 'required',
        ],$message);

        $data['dusun'] = Dusun::create($request->all());
        return redirect('admin/dusun')->with('message','A New Dusun With Title  Has Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['dusun'] = Dusun::find($id);
        return view('dusun.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = [
            'required' => 'Data :attribute Tidak Boleh Ada Yang Kosong',
        ];

        $request->validate([
             'nama_dusun' => 'required',
        ],$message);

        $data['dusun'] = Dusun::find($id);
        $data['dusun']->update($request->all());
        return redirect('admin/dusun')->with('message','A Dusun With Title  Has Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['dusun'] = Dusun::find($id);
        $data['dusun']->delete();  
        return redirect('admin/dusun')->with('message','A Dusun Has Deleted');
    }
}

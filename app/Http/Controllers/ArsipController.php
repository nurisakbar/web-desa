<?php

namespace App\Http\Controllers;
use App\Models\Arsip;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArsipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['articles'] = Arsip::orderBy('created_at','asc')->get();
        return view('arsip.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('arsip.create');
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
             'judul' => 'required',
            
             'nama_file' => 'required',
        ],$message);

        $input          = $request->all();
        $nama_file         = $request->file('nama_file');
        $file_nama    = $nama_file->getClientOriginalName();

        $destinationPath = 'nama_file';
        $nama_file->move($destinationPath,$file_nama);

        $input['slug']      = Str::slug($request->judul, '-');
        $input['nama_file']    = $file_nama;

        Arsip::create($input);
        return redirect('admin/arsip')->with('message','A New Article With Title '.$request->name.' Has Created');
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
        $data['arsip'] = Arsip::find($id);
        return view('arsip.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $message = [
            'required' => 'Data :attribute Tidak Boleh Ada Yang Kosong',
        ];

        $request->validate([
             'judul' => 'required',
             //'arsip' => 'required',
        ],$message);

        $input              = $request->all();

        if ($request->hasFile('nama_file')) {
            $nama_file         = $request->file('nama_file');
            $file_nama    = $nama_file->getClientOriginalName();
            $destinationPath = 'nama_file';
            $nama_file->move($destinationPath,$file_nama);
            $input['nama_file']    = $file_nama;
        }
        
        $input['slug']      = Str::slug($request->judul, '-');
        $arsip            = Arsip::find($id);
        $arsip->update($input);

        return redirect('admin/arsip')->with('message','A Article With Title '.$request->name.' Has Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arsip = Arsip::find($id);

        $arsip->delete();
        
        return redirect('admin/arsip')->with('message','A Article Has Deleted');
    }
}

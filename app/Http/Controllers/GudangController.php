<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['gudang'] = Gudang::orderBy('id_gudang','desc')->paginate(0);
        return View ('gudang.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gudang::create([
            'nama_gudang' => $request->nama_gudang,
        ]);

        return redirect('/gudang')->with('success','Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gudang $gudang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gudang $gudang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Gudang::where('id_gudang', $id)
            ->where('id_gudang', $id)
                ->update([
                    'nama_gudang' => $request->nama_gudang,
                ]);

        return redirect('/gudang')->with('success','Data Berhasil Diubah!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Gudang::where('id_gudang', $id)->delete();
        return redirect('/gudang')->with('success','Data Berhasil Dihapus!');
    }
}

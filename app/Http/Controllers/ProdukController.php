<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['produk'] = Produk::orderBy('id_produk','desc')->paginate(0);
        return View ('produk.index',$data);
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
            'nama_produk' => $request->nama_produk,
        ]);

        return redirect('/produk')->with('success','Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Produk::where('id_produk', $id)
            ->where('id_produk', $id)
                ->update([
                    'nama_produk' => $request->nama_gudang,
                ]);

        return redirect('/produk')->with('success','Data Berhasil Diubah!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Produk::where('id_produk', $id)->delete();
        return redirect('/produk')->with('success','Data Berhasil Dihapus!');
    }
}

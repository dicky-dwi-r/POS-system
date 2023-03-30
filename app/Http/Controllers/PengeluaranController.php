<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pengeluaran'] = Pengeluaran::orderBy('id_pengeluaran','desc')->paginate(0);
        return View ('pengeluaran.index',$data);
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
        Pengeluaran::create([
            'deskripsi' => $request->deskripsi,
            'nominal' => $request->nominal,
        ]);

        return redirect('/pengeluaran')->with('success','Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Pengeluaran::where('id_pengeluaran', $id)
            ->where('id_pengeluaran', $id)
                ->update([
                    'deskripsi' => $request->deskripsi,
                    'nominal' => $request->nominal,
                ]);

        return redirect('/pengeluaran')->with('success','Data Berhasil Diubah!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Pengeluaran::where('id_pengeluaran', $id)->delete();
        return redirect('/pengeluaran')->with('success','Data Berhasil Dihapus!');
    }
}

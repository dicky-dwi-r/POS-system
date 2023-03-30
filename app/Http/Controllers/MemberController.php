<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['member'] = Member::orderBy('id_member','desc')->paginate(0);
        return View ('member.index',$data);
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
        Member::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        return redirect('/member')->with('success','Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Member::where('id_member', $id)
            ->where('id_member', $id)
                ->update([
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'telepon' => $request->telepon,
                ]);

        return redirect('/member')->with('success','Data Berhasil Diubah!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Member::where('id_member', $id)->delete();
        return redirect('/member')->with('success','Data Berhasil Dihapus!');
    }
}

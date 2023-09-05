<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Http\Requests\StoreNasabahRequest;
use App\Http\Requests\UpdateNasabahRequest;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Nasabah::latest()->get();
        return view('admin.nasabah.nasabah', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.nasabah.addnasabah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namanasabah' => 'required',
            'teleponnasabah' => 'required|max:13|min:3',
            'alamatnasabah' => 'required'
        ]);
        
        $nasabah = new Nasabah;
        $nasabah->nama_nasabah = $request->namanasabah;
        $nasabah->telepon_nasabah = $request->teleponnasabah;
        $nasabah->alamat_nasabah = $request->alamatnasabah;
        $nasabah->status = $request->status;

        $nasabah->save();

        return redirect('nasabah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nasabah $nasabah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Nasabah::firstWhere('id',$id);
        return view('admin.nasabah.editnasabah',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'namanasabah' => 'required',
            'teleponnasabah' => 'required|max:13|min:3',
            'alamatnasabah' => 'required'
        ]);
        
        Nasabah::where('id',$request->id)->update([
            'nama_nasabah' => $request->namanasabah,
            'telepon_nasabah' => $request->teleponnasabah,
            'alamat_nasabah' => $request->alamatnasabah,
            'status' => $request->status,
        ]);
        
        return redirect('nasabah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Nasabah::where('id', $id)->delete();
        return redirect('nasabah');
    }
}

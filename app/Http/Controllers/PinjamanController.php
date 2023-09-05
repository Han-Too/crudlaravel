<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    public function index(){
        $data = Pinjaman::latest()->get();

        return view('admin.pinjaman.pinjaman',compact('data'));
    }

    public function create(){
        $data = Nasabah::all();
        return view('admin.pinjaman.tambah',compact('data'));
    }

    public function store(Request $request){
        $request->validate([
            'namanasabah' => 'required',
            'nominal' => 'required|numeric|integer',
            'tanggal' => 'required|date',
        ]);

        $data = new Pinjaman;
        $data->nasabah_id = $request->namanasabah;
        $data->nominal = $request->nominal;
        $data->tanggal_pinjam = $request->tanggal;

        $data->save();

        return redirect('pinjaman');
    }

    public function edit($id){
        $pinjaman = Pinjaman::find($id);
        $data = Nasabah::all();
        return view('admin.pinjaman.update', compact('data','pinjaman'));
    }

    public function update(Request $request){
        $request->validate([
            'namanasabah' => 'required',
            'nominal' => 'required|numeric|integer',
            'tanggal' => 'required|date',
        ]);

        Pinjaman::where('id', $request->namanasabah)->update([
            'nasabah_id' => $request->namanasabah,
            'nominal' => $request->nominal,
            'tanggal_pinjam' => $request->tanggal,
        ]);

        return redirect('pinjaman');
    }

    public function destroy($id){
        Pinjaman::where('id', $id)->delete();
        return redirect('pinjaman');
    }
}

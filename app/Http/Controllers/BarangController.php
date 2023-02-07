<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    //
    public function index()
    {
        $data_barang = \App\Models\Barang::all();
        return view('barang.index',['data_barang' => $data_barang]);
    }

    public function create(Request $request)
    {
        barang::create($request->all());
        return redirect('/barang')->with('Sukses','Data berhasil di input');
    }

    public function edit($id)
    {
        $data_barang = \App\Models\Barang::find($id);
        return view('barang.edit',['barang' => $data_barang]);
    }

    public function update(Request $request, $id)
    {
        $data_barang = \App\Models\Barang::find($id);
        $data_barang->update($request->all());
        return redirect('barang')->with('Sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $data_barang = \App\Models\Barang::find($id);
        $data_barang->delete();
        return redirect('/barang')->with('Sukses','Data berhasil dihapus');
    }
}

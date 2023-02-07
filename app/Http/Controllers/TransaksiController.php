<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    //
    public function index()
    {
        $data_transaksi = \App\Models\Transaksi::all();
        return view('transaksi.index',['data_transaksi' => $data_transaksi]);
    }

    public function create(Request $request)
    {
        Transaksi::create($request->all());
        return redirect('/transaksi')->with('Sukses','Data berhasil di input');
    }

    public function edit($id)
    {
        $data_transaksi = \App\Models\Transaksi::find($id);
        return view('transaksi.edit',['transaksi' => $data_transaksi]);
    }

    public function update(Request $request, $id)
    {
        $data_transaksi = \App\Models\Transaksi::find($id);
        $data_transaksi->update($request->all());
        return redirect('/transaksi')->with('Sukses','Data berhasil di update');
    }

    public function delete($id)
    {
        $data_transaksi = \App\Models\Transaksi::find($id);
        $data_transaksi->delete();
        return redirect('/transaksi')->with('Sukses','Data berhasil di hapus');
    }
}

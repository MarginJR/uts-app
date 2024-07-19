<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Penyimpanan;

class PenyimpananController extends Controller
{
    public function index(){
        $penyimpanan = Penyimpanan::all();
        return view('welcome', ['penyimpanan'=>$penyimpanan]);
    }

    public function add(Request $req){
        $penyimpanan = new Penyimpanan;
        $penyimpanan->id = $req->id;
        $penyimpanan->nama_barang = $req->nama_barang;
        $penyimpanan->deskripsi = $req->deskripsi;
        $penyimpanan->stok_tersedia = $req->stok_tersedia;
        $penyimpanan->harga_satuan = $req->harga_satuan;
        $penyimpanan->kategori = $req->kategori;
        $penyimpanan->save();
        return redirect()->back();
    }
}

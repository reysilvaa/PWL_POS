<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }
 

    public function edit($id){
        $kategori = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $kategori]);
    }

    public function update(Request $request, $id){
        $kategori = KategoriModel::find($id);
        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;
        $kategori->save();
        return redirect('/kategori');
    }

    public function delete($id) {
        $kategori = KategoriModel::find($id);
        
        if($kategori) {
            $kategori->delete();
        }
            return redirect('/kategori');
    }
    

    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);

        return redirect('/kategori');
    }
}

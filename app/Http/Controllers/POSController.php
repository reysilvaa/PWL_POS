<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class POSController extends Controller
{
    /**
     * Menampilkan daftar sumber daya.
     */
    public function index()
    {
        // Fungsi eloquent menampilkan data menggunakan pagination
        $useri = UserModel::all(); // Mengambil semua isi tabel
        return view('m_user.index', compact('useri'));
    }

    /**
     * Menampilkan formulir untuk membuat sumber daya baru.
     */
    public function create()
    {
        return view('m_user.create');
    }

    /**
     * Menyimpan sumber daya yang baru dibuat di penyimpanan.
     */
    public function store(Request $request)
    {
        // Melakukan validasi data
        $request->validate([
            'user_id' => 'max:20',
            'username' => 'required',
            'nama' => 'required',
        ]);

        // Fungsi eloquent untuk menambah data
        UserModel::create($request->all());

        return redirect()->route('m_user.index')->with('success', 'User Berhasil Ditambahkan');
    }

    /**
     * Menampilkan sumber daya yang ditentukan.
     */
    public function show(string $id)
    {
        $useri = UserModel::findOrFail($id);
        return view('m_user.show', compact('useri'));
    }

    /**
     * Menampilkan formulir untuk mengedit sumber daya yang ditentukan.
     */
    public function edit(string $id)
    {
        $useri = UserModel::find($id);
        return view('m_user.edit', compact('useri'));
    }

    /**
     * Menyimpan sumber daya yang telah diubah di penyimpanan.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',
        ]);

        // Fungsi eloquent untuk mengupdate data inputan kita
        UserModel::find($id)->update($request->all());

        // Jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('m_user.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Menghapus sumber daya yang ditentukan dari penyimpanan.
     */
    public function destroy(string $id)
    {
        // Fungsi eloquent untuk menghapus data
        UserModel::find($id)->delete();

        // Jika data berhasil dihapus, akan kembali ke halaman utama
        return redirect()->route('m_user.index')->with('success', 'Data Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\LevelRequest;
use App\Models\LevelModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class LevelController extends Controller
{
    public function index() {
        // $user = LevelModel::with('level_id')->get();
        // return view('user.tambah', ['data' => $user]);
        return view('level.index');


    }
    public function tambah(){
        return view('level.tambah');

    }
    public function tambah_simpan(LevelRequest $request): RedirectResponse
{
    // Retrieve validated input data
    $validated = $request->validated();

    // Retrieve a part of the validated input data
    $validated = $request->safe();

    return redirect('/level');
}

}

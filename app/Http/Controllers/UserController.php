<?php
namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller {
    public function index() {
        $user = UserModel::firstOrNew([
            'username' => 'manager33',
            'nama' => 'Manager Tiga Tiga',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ],
    );
    $user->save();
    return view('user', ['data' => $user]);
    }
}
// $user = UserModel::where('username', 'manager9')->firstorFail();

//$user = UserModel::findOrFail(20, ['username', 'nama'], function () {
  //  abort(404);
//});

// $user = UserModel::findOrFail(1, ['username', 'nama']);

// $user = UserModel::firstWhere('level_id', 1);
        // return view('user', ['data' => $user]);

// // tambah data user dengan Eloquent Model
        // $data = [
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ];
        // UserModel::create($data); 
        
        // $user = UserModel::all(); 
        
        // // ambil semua data dari tabel m_user 
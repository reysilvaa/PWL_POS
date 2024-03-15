<?php
namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller {
    public function index() {
        $user = UserModel::create([
            'username' => 'managerll',
            'nama' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);
        
        $user->username = 'manager12';
        $user->save();
        
        $user->wasChanged(); // true
        $user->wasChanged('username'); // true
        $user->wasChanged(['username', 'level_id']); // true
        $user->wasChanged('nama'); // false
        dd($user->wasChanged(['nama', 'username'])); // true
        
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
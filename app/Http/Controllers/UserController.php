<?php
namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\UserModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller {
    public function index() {
        $user = UserModel::with('level')->get();
        return view('user.index', ['data' => $user]);

    }
    public function tambah(){
        return view('user.tambah');
    }
    public function tambah_simpan(UserRequest $request):RedirectResponse
    {
        $validated = $request->validated();

        $validated = $request->safe();
        return redirect('/user');
    }

    public function ubah($id){
        $user = UserModel::find($id);
        return view('user_ubah',['data'=>$user]);
    }

    public function ubah_simpan($id,Request $request){
        $user=UserModel::find($id);

        $user->username=$request->username;
        $user-> nama=$request->nama;
        $user-> password=Hash::make('$request->password');
        $user-> level_id=$request->level_id;
        $user->save();
        return redirect('/user');
    }

    public function hapus($id){
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/user');
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

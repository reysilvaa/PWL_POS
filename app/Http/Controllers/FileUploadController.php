<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('user.file-upload');
    }
    public function prosesFileUpload(Request $request) {
        // return "Pemrosesan File Upload di sini"
        // if($request->hasFile('berkas')) {
        //     echo "path(): " . $request->berkas->path() . "<br>";
        //     echo "extension(): " . $request->berkas->extension() . "<br>";
        //     echo "getClientOriginalExtension(): " . $request->berkas->getClientOriginalExtension() . "<br>";
        //     echo "getMimeType(): " . $request->berkas->getMimeType() . "<br>";
        //     echo "getClientOriginalName(): " . $request->berkas->getClientOriginalName() . "<br>";
        //     echo "getSize(): " . $request->berkas->getSize() . "<br>";
        // } else {
        //     echo "Tidak ada berkas yang diupload";
        // }

        // $request->validate([
        //     'berkas' => 'required|file|image|max:5000'
        // ]);
        // $extFile = $request->berkas->getClientOriginalName();
        // $namaFile = 'web-'.time().".".$extFile;
        // $path = $request->berkas->storeAs('public', $namaFile);

        // $pathBaru = asset("storage/".$namaFile);
        // echo "Proses upload Berhasil, File Berada di ".$path;
        // echo "<br>";
        // echo "<a href='$pathBaru'> $pathBaru </a>";

        $request->validate([
            'berkas'=>'required|file|image|max:500',]);
            $extfile =  $request->berkas->getClientOriginalName();
            $namaFile = 'web-'.time().".".$extfile;

            $path = $request->berkas->move('public',$namaFile);
            $path =  str_replace("\\","//",$path);
            echo "Variabel path berisi:$path <br>";

            $pathBaru = asset('gambar/'.$namaFile);
            echo "Proses upload berhasil, data disimpan pada: $path";
            echo "<br>";
            echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";
     }
}

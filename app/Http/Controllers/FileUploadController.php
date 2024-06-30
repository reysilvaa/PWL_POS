<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('user.file-upload');
    }

    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'berkas' => 'required|file|image|max:500',
            'filename' => 'required|string|max:255'
        ]);

        $filename = $request->input('filename') . '.' . $request->berkas->extension();
        $path = $request->berkas->storeAs('public/uploads', $filename);
        $publicPath = Storage::url($path);

        return response()->json(['filePath' => $publicPath, 'path' => $path]);
    }
}

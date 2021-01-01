<?php

namespace App\Http\Controllers\pendaftaranOr;

use App\Http\Controllers\Controller;
use App\Models\PendaftaranOrs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DasboardOrController extends Controller
{
    public function index()
    {
        return view('pages.pendaftaran.index');
    }

    public function pendaftaranTutup()
    {
        return view('pages.pendaftaran.pendaftaran_tutup');
    }

    public function daftar()
    {
        return view('pages.pendaftaran.formOr');
    }

    public function viewPdf($id)
    {
        // $items = PendaftaranOrs::findOrfail($id);
        return view('pages.pendaftaran.viewPdf', [
            'items' =>
            PendaftaranOrs::findOrfail($id)
        ]);
    }


    // public function DownloadVideo()
    // {
    //     $video = Storage::url('file/tes.mp4');
    //     $download = Storage::download('file', 'tes.mp4');
    //     return view('pages.pendaftaran.index', compact($download));
    // }
}

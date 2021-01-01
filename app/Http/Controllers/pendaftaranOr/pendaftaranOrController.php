<?php

namespace App\Http\Controllers\pendaftaranOr;

use App\Exports\NewMemberExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\PendaftaranOrRequest;
use App\Imports\PengumumanImport;
use App\Models\PendaftaranOrs;
use App\Models\PengumumanOr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class pendaftaranOrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = PendaftaranOrs::simplePaginate(5);
        // $items = DB::table('pendaftaran_ors')
        //     ->paginate(10);
        $pengumumans = PengumumanOr::all();
        return view('pages.admin.dataOr.index', [
            'items' => $items,
            'pengumumans' => $pengumumans
        ]);
    }

    public function pengumuman()
    {
        $items = PendaftaranOrs::simplePaginate(5);
        // $items = DB::table('pendaftaran_ors')
        //     ->paginate(10);
        $pengumumans = PengumumanOr::all();
        return view('pages.pendaftaran.pengumuman', [
            'items' => $items,
            'pengumumans' => $pengumumans
        ]);
    }

    public function export_excel()
    {
        return Excel::download(new NewMemberExport, 'dataOr.xlsx');
    }


    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_Pengumuman', $nama_file);

        // import data
        Excel::import(new PengumumanImport, public_path('/file_pengumuman/' . $nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Pengumuman Or Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/pendaftaranOr');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $items = DB::table('pendaftaran_ors')
            ->where('nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data items ke view index
        return view('pages.admin.dataOr.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendaftaranOrRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        $data['foto'] = $request->file('foto')->store(
            'assets/foto',
            'public'
        );
        $data['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store(
            'assets/bukti_pembayaran',
            'public'
        );
        $data['quesioner'] = $request->file('quesioner')->store(
            'assets/quesioner',
            'public'
        );
        $data['sertifikat_pkkmb'] = $request->file('sertifikat_pkkmb')->store(
            'assets/sertifikat_pkkmb',
            'public'
        );

        if ($request->file('sertifikat_lain') == true) {
            $data['sertifikat_lain'] = $request->file('sertifikat_lain')->store(
                'assets/sertifikat_pkkmb/sertifikat_lain',
                'public'
            );
        }

        PendaftaranOrs::create($data);

        return view('pages.pendaftaran.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = PendaftaranOrs::findOrfail($id);
        return view('pages.pendaftaran.formDetailOr', [
            'item' => $item
        ]);
    }

    public function viewPdf($id)
    {
        $item = PendaftaranOrs::findOrfail($id);
        return view('pages.pendaftaran.viewPdf', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = PendaftaranOrs::findOrfail($id);
        return view('pages.pendaftaran.formDetailOr', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PendaftaranOrs::findOrfail($id);
        $item->delete();

        return redirect()->route('pendaftaranOr.index');
    }
}

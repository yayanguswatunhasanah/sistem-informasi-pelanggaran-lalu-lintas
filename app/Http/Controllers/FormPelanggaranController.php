<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekap;
use App\Models\TravelPackage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;

class FormPelanggaranController extends Controller
{
    public function index()
    {
        return view('form_pelanggaran.index');
    }

    public function store(Request $request)
    {
        $bukti_foto = '';
        try {
            if ($request->file('bukti_foto')) {
                $bukti_foto = $request->file('bukti_foto')->store(
                    'bukti_foto', 'public'
                );    
            }
        } catch (\Throwable $th) {
        }

        $bukti_video = '';
        try {
            if ($request->file('bukti_video')) {
                $bukti_video = $request->file('bukti_video')->store(
                    'bukti_video', 'public'
                );    
            }
        } catch (\Throwable $th) {
        }

        $bukti_foto = str_replace('bukti_foto', '', $bukti_foto);
        $bukti_video = str_replace('bukti_video', '', $bukti_video);

        Rekap::create([
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'no_handphone' => $request->no_handphone,
            'plat_nomor' => $request->plat_nomor,
            'bukti_foto' => $bukti_foto,
            'bukti_video' => $bukti_video,
        ]);

        return redirect()->route('form_pelanggaran.index')->with('success', 'Terimakasih pengaduan Anda telah tersimpan.');
    }
}

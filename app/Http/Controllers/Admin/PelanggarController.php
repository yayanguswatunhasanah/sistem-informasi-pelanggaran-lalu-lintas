<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Rekap;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TravelPackageRequest;

class PelanggarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekap = Rekap::paginate(10);

        return view('admin.pelanggar.index', compact('rekap'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pelanggar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bukti_foto = '';
        try {
            if ($request->file('bukti_foto')) {
                $bukti_foto = $request->file('bukti_foto')->store(
                    'bukti_foto',
                    'public'
                );
            }
        } catch (\Throwable $th) {
        }

        $bukti_video = '';
        try {
            if ($request->file('bukti_video')) {
                $bukti_video = $request->file('bukti_video')->store(
                    'bukti_video',
                    'public'
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
            'nik_pelanggar' => $request->nik_pelanggar,
            'nama_lengkap_pelanggar' => $request->nama_lengkap_pelanggar,
            'email_pelanggar' => $request->email_pelanggar,
            'no_handphone_pelanggar' => $request->no_handphone_pelanggar,
            'status' => $request->status,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('admin.pelanggar.index')->with([
            'message' => 'Data berhasil tersimpan',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelanggar = Rekap::find($id);
        return view('admin.pelanggar.edit', compact('pelanggar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $pelanggar = Rekap::find($id);

        $bukti_foto = '';
        try {
            if ($request->file('bukti_foto')) {
                $bukti_foto = $request->file('bukti_foto')->store(
                    'bukti_foto',
                    'public'
                );
            }
        } catch (\Throwable $th) {
        }

        $bukti_video = '';
        try {
            if ($request->file('bukti_video')) {
                $bukti_video = $request->file('bukti_video')->store(
                    'bukti_video',
                    'public'
                );
            }
        } catch (\Throwable $th) {
        }

        $bukti_foto = str_replace('bukti_foto', '', $bukti_foto);
        $bukti_video = str_replace('bukti_video', '', $bukti_video);

        $update = [
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'no_handphone' => $request->no_handphone,
            'plat_nomor' => $request->plat_nomor,
            'nik_pelanggar' => $request->nik_pelanggar,
            'nama_lengkap_pelanggar' => $request->nama_lengkap_pelanggar,
            'email_pelanggar' => $request->email_pelanggar,
            'no_handphone_pelanggar' => $request->no_handphone_pelanggar,
            'status' => $request->status,
            'keterangan' => $request->keterangan
        ];

        if (!empty($bukti_foto)) {
            $update['bukti_foto'] = $bukti_foto;
        }
        if (!empty($bukti_video)) {
            $update['bukti_video'] = $bukti_video;
        }

        $pelanggar->update($update);

        return redirect()->route('admin.pelanggar.index')->with([
            'message' => 'Data berhasil diperbarui',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pelanggar = Rekap::find($id);
        if ($pelanggar) {
            $pelanggar->delete();
            return redirect()->back()->with([
                'message' => 'Data berhasil dihapus',
                'alert-type' => 'danger'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => 'Data berhasil dihapus',
                'alert-type' => 'danger'
            ]);
        }
    }
}

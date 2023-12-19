<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Training;
use App\Models\TravelPackage;
use App\Models\HubungiKami;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;

class HubungiKamiController extends Controller
{
    public function index()
    {
        return view('hubungi_kami.index');
    }

    public function store(Request $request)
    {
        HubungiKami::create([
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ]);

        return redirect()->route('hubungi_kami.index')->with('success', 'Terimakasih telah menghubungi kami. Kami akan membalasnya nanti.');
    }
}

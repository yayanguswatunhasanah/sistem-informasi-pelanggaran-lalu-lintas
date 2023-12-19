<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Training;
use App\Models\TravelPackage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;

class TentangKamiController extends Controller
{
    public function index()
    {
        return view('tentang_kami.index');
    }
}

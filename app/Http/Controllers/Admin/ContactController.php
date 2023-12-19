<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HubungiKami;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TravelPackageRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = HubungiKami::paginate(10);

        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        HubungiKami::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ]);

        return redirect()->route('admin.contact.index')->with([
            'message' => 'Data berhasil tersimpan',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contact = HubungiKami::find($id);
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $contact = HubungiKami::find($id);
        $update = [
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ];
        $contact->update($update);

        return redirect()->route('admin.contact.index')->with([
            'message' => 'Data berhasil diperbarui',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact = HubungiKami::find($id);
        if ($contact) {
            $contact->delete();
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Izin; 

class IzinController extends Controller
{
    public function index()
    {
        $izins = Izin::all();
        return view('izin.index', compact('izins'));
    }

    public function create()
    {
        return view('izin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|int|max:255 ',
            'alasan' => 'required|string|max:500',
            'tanggal' => 'required|date',
        ]);

        Izin::create($request->all());

        return redirect()->route('izin.index')->with('success', 'Izin berhasil diajukan!');
    }
}

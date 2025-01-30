<?php

namespace App\Http\Controllers;
use App\Models\Izinn;

use Illuminate\Http\Request;

class IzinnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $izinns = Izinn::all();
        return view('izinn.index', compact('izinns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('izinn.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|int|max:255 ',
            'alasan' => 'required|string|max:500',
            'tanggal' => 'required|date',
        ]);

        Izinn::create($request->all());

        return redirect()->route('izinn.index')->with('success', 'Izin berhasil diajukan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

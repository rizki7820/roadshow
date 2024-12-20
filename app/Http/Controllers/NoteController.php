<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $note = Note::all();
        return view('note.index', compact('note'));
    }

    public function create()
    {
        return view('note.tambah');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'note' => 'nullable|string',
        ]);

        Note::create($validatedData);

        return redirect()->route('note.index')->with('success', 'Data berhasil disimpan.');
    }
}

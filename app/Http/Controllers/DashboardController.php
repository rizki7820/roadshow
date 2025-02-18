<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Note::all();
        return view('dashboard.index', compact('data'));
    }

    public function akun()
    {
        return view('akun');
    }

    public function izin()
    {
        return view('izin');
    }

    public function storeData(Request $request)
    {
        Note::create($request->all());
        return redirect()->route('dashboard');
    }

    public function storeIzin(Request $request)
    {
        Note::create($request->all());
        return redirect()->route('dashboard');
    }
}

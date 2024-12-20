<?php

namespace App\Http\Controllers;
use App\Models\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akun = Akun::get();
        return view('akun.index', compact('akun'));
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('akun.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'nip'       => 'required|int|unique:akuns,nip',
        'nama'      => 'required|string|max:255',
        'no_telfon' => 'required|int|unique:akuns,no_telfon',
        'lokasi'    => 'required',
        'unggah'    => 'required|mimes:jpg,png',
    ]);

    // Proses file upload
    $fileName = time() . '_' . $request->file('unggah')->getClientOriginalName();
    $filePath = $request->file('unggah')->storeAs('uploads', $fileName, 'public');

    // Simpan data ke database
    Akun::create([
        'nip'       => $request->nip,
        'nama'      => $request->nama,
        'no_telfon' => $request->no_telfon,
        'lokasi'    => $request->lokasi,
        'unggah'    => $filePath,
    ]);

    return redirect()->route('akun.index')->with('success', 'Data akun anda berhasil disimpan');
}

    

    /**
     * Display the specified resource.
     */
    public function show(Akun $Akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $akun = Akun::findOrFail($id);
        return view('akun.edit', compact('akun'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $request->validate([
            'nip'        => 'required|int|unique:akuns,nip,' . $id,
            'nama'       => 'required|string|max:255',
            'no_telfon'  => 'required|int|unique:akuns,no_telfon,' .$id,
            'lokasi'     => 'required',
            'unggah'     => 'required|mimes:jpg,png',
        ]);
    
        $akun = Akun::findOrFail($id);
    
        $akun->update([
            'nip'           => $request->nip,
            'nama'          => $request->nama,
            'no_telfon'     => $request->no_telfon,
            'lokasi'        => $request->lokasi,
            'unggah'        => $request->unggah,
        ]);
    
        return redirect()->route('akun.index')->with('success', 'Data anda berhasil diupdate');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $akun = Akun::findOrFail($id);
        $akun->delete();
        return redirect()->route('akun.index')->with('success', 'Data anda berhasil dihapus');

    }
}
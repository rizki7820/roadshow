<form method="POST"action="{{route('akun.update', $akun->id)}}">
    @csrf
    @method('PUT')

    NIP/NIS : 
    <input type="text" name="nip" require value="{{ old('nip', $akun->nip) }}">
    <br/>
    Nama Lengkap : 
    <input type="text" name="nama" require value="{{ old('nama', $akun->nama) }}">
    <br/>
    No Telfon : 
    <input type="text" name="no_telfon" require value="{{ old('no_telfon', $akun->no_telfon) }}">
    <br/>
    Lokasi Rootshow : 
    <input type="text" name="lokasi" require value="{{ old('lokasi', $akun->lokasi) }}">
    <br/>
    Unggah Foto : 
    <input type="text" name="unggah" require value="{{ old('unggah', $akun->unggah) }}">
    <br/>

    <button type="submit" title="Simpan" class="btn btn-success btn sm"><i class="fa fa-folder mr-2"></i>simpan data</button>
    <a href="{{ route('akun.index') }}" title="kembali" class="btn btn-warning btn sm "><i class="fa fa-chevron-left mr-2"></i>kembali</a>
</form>


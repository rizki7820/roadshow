<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $fillable = ['nip', 'nama', 'no_telfon', 'lokasi', 'unggah'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $table = 'catat';
    protected $fillable = ['tanggal', 'hari', 'tahun', 'note'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($note) {
            $note->hari = date('l', strtotime($note->tanggal)); // Nama hari otomatis
            $note->tahun = date('Y', strtotime($note->tanggal)); // Tahun otomatis
        });
    }
}

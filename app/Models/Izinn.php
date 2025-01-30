<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izinn extends Model
{
    use HasFactory;
    protected $table = 'izin2';
    protected $fillable = ['nama', 'nip', 'alasan', 'tanggal'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setoran extends Model
{
    use HasFactory;

    protected $table = 'setorans';
    protected $fillable = ['id', 'nama', 'tanggal', 'jenis_donasi', 'total_setoran'];
}

?>
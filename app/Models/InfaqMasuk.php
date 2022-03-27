<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfaqMasuk extends Model
{
    use HasFactory;
    
    protected $table = 'infaqmasuk';
    protected $fillable = ['id', 'tanggal', 'keterangan', 'jumlah'];
}

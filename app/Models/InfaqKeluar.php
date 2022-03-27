<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfaqKeluar extends Model
{
    use HasFactory;
    
    protected $table = 'infaqkeluar';
    protected $fillable = ['id',  'tanggal', 'keterangan', 'jumlah'];
}

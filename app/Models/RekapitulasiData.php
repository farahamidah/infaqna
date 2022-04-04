<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapitulasiData extends Model
{
    use HasFactory;
    
    protected $table = 'rekapitulasidata';
    protected $fillable = ['id', 'keterangan','tanggal', 'masuk', 'keluar'];
}

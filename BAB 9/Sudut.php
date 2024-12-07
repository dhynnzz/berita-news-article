<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sudut extends Model
{
    use HasFactory;
    protected $table = 'suduts';
    protected $primaryKey = 'id_informasi';
    public $incrementing = true;
    protected $fillable = ['tanggal','judul_informasi', 'sumber_informasi', 'deskripsi'];
    public $timestamps = true;

}


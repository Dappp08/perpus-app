<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = ['judul_buku', 'penulis', 'penerbit', 'tahun_terbit', 'file_name'];
    protected $table = 'buku';
    public $timestamps = false;
}

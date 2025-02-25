<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Belajar extends Model
{
    use HasFactory;

    protected $table = 'tbl_belajar';
    protected $fillable = ['judul', 'deskripsi', 'gambar'];

    public function details()
    {
        return $this->hasMany(BelajarDetail::class);
    }
}
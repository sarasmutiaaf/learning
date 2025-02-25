<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BelajarDetail extends Model
{
    use HasFactory;
    
    protected $table = 'tbl_belajar_detail'; 
    protected $fillable = ['belajar_id', 'judul_belajar', 'file']; 

    public function belajar()
    {
        return $this->belongsTo(Belajar::class);
    }
}
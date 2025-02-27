<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    use HasFactory;
    protected $table = 'tbl_diskusi';
    protected $fillable = [
        'belajar_detail_id', 'user_id', 'pesan', 'level', 'parent_id'
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke diskusi induk
    public function parent()
    {
        return $this->belongsTo(Diskusi::class, 'parent_id');
    }

    // Relasi ke balasan diskusi
    public function replies()
    {
        return $this->hasMany(Diskusi::class, 'parent_id');
    }
}
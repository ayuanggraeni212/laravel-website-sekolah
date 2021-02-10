<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'absensi';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['nama', 'kelas', 'komentar', 'tanggal'];
}

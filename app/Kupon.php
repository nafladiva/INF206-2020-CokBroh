<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    public $table = "kupon";
    
    protected $fillable = ['nama', 'berlaku_sampai', 'jumlah_poin', 'deskripsi', 'jumlah', 'gambar'];
}

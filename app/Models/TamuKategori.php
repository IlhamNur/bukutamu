<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamuKategori extends Model
{
    use HasFactory;

    protected $fillable = ['tamus_nomor', 'kategoris_nomor'];

    public function kategori(){
        return $this->hasOne(Kategori::class, 'nomor', 'kategoris_nomor');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukutamu extends Model
{
    use HasFactory;

    protected $primaryKey = 'nomor';
    protected $fillable = ['nama', 'email', 'komentar'];

    public function tamuKategoris(){
        return $this->hasMany(TamuKategori::class, 'tamus_nomor', 'nomor');
    }

    public function hasKategoriByNomor($nomor){
        if($this->tamuKategoris->whereIn('kategoris_nomor', $nomor)->first()){
            return true;
        }
        
        return false;
    }
}

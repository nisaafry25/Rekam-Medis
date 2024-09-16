<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table ='pasiens';
    protected $guarded =['id'];


    public function dokter()
    {
        return $this->belongsToMany(Dokter::class, 'pasien_dokter', 'pasien_id', 'dokter_id');
    }
}  



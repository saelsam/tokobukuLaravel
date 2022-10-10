<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    public function Tokobuku(){
        return $this->hasMany(Tokobuku::class);
    }

    use HasFactory;
    // protected $table = 'penerbits';
    // protected $fillable = ['id','nama','alamat'];
}




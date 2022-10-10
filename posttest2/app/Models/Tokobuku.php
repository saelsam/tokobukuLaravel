<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tokobuku extends Model
{   
    public function penerbit(){
        return $this->belongsTo(Penerbit::class);
    }
    use HasFactory;
    // protected $table = 'tokobukus';
    // protected $fillable = ['id','nama','jenis','harga'];
}

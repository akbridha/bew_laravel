<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siaran extends Model
{
    use HasFactory;


    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    public function Kategori(){
        return $this->belongsTo(Kategori::class);
    }
}

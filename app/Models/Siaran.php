<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siaran extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

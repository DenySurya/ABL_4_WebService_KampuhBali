<?php

namespace App\Models;
use App\Models\Categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function kegiatan()
    {
        return $this->belongsTo(categories::class,'index');
    }
}

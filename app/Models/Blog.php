<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','description','image','category_id'
    ];
    public function category(){
        return $this->belongsTo(Blog::class,'category_id');
}
}
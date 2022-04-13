<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_name',
        'slug_name',
        'des'
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }
}

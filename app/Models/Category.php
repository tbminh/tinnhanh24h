<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'category_name','category_note'
    ];

    public $timestamps = true;


    //Cate has many post
    public function product()
    {
        return $this->hasMany('App\Post');
    }
}

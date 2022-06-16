<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'cate_id','author', 'title','content', 'post_status', 'image'
    ];

    public $timestamps = true;

    //Quyền có nhiều người dùng
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Quyền có nhiều người dùng
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

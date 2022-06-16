<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleAccess extends Model
{
    use HasFactory;
    protected $table = 'role_accesses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'role_name','permission'
    ];

    public $timestamps = true;

    //Quyền có nhiều người dùng
    public function user()
    {
        return $this->hasMany('App\User');
    }
}

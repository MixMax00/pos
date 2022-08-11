<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use App\Models\User;


class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','first_name','last_name','status','role_id','created_at','updated_at'];



    public function user_info()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function user_role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }



    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

<?php

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $fillable=[
        'name','surname','email','password','user_type_id'
    ];
}
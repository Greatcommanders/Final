<?php

use Illuminate\Database\Eloquent\Model;

class RequestModel extends Model
{
    protected $table = 'request';
    protected $fillable=[ 
        'user_id',
        'request_date',
        'request_type_id',
        'request_status_id',
        'request_comment'
    ];
}
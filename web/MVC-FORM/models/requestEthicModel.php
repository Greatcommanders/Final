<?php

use Illuminate\Database\Eloquent\Model;

class RequestEthicModel extends Model
{
    protected $table = 'request_ethic';
    protected $fillable=[
        'request_id',
        'ethic_id'
    ];
}
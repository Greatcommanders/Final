<?php

use Illuminate\Database\Eloquent\Model;

class RequestResearchModel extends Model
{
    protected $table = 'request_research';
    protected $fillable=[
        'request_id',
        'research_id'
    ];
}
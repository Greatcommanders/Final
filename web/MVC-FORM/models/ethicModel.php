<?php

use Illuminate\Database\Eloquent\Model;

class EthicModel extends Model
{
    protected $table = 'ethics_committee';
    protected $fillable=[
        'study_description',	
        'data_collection',		
        'expected_result',		
        'procedures',		
        'aim_of_the_study',		
        'potential_contributions',		
        'previous_research_projects',		
        'user_id',
        'request_id',
        'researcher',	
        'supervisor'
    ];
}
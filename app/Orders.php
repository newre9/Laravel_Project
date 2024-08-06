<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_name','number_of_words','project_type','category','sub_category' ,'requested_turnaround_time',
            'journal_Specific_formatting','file',
            'english_style',
            'payment_status',
            'status',
            'total_cost',
            'comment',
            'user_id',

    ];
    public function user() {

        return $this->belongsTo('App\User','user_id');
            
     }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserComments extends Model
{
        protected $guarded = array('id');
    
    public static $rules = array(
        'commenter_id' => 'required',
        'commented_id' => 'reqired',
        'contents' => 'required',
    );
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    
}

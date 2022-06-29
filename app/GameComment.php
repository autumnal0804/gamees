<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameComment extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'user_id' => 'required',
        'game_id' => 'reqired',
        'contents' => 'required',
    );
    
    public function game(){
        return $this->belongsTo('App\Game');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}

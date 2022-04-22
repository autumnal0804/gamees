<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
        'game_img' => 'required',
        'game_name' => 'reqired',
    );
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}

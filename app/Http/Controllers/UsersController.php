<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Game;
use App\User;
use App\UserComments;

class UsersController extends Controller
{
    public function search(Request $request)
    {
        //データベースのユーザーデータを取得する
        $cond_name = $request->cond_name;
        if ($cond_name !='') {
            $users = User::where('name', 'like', '%' . $cond_name . '%')->where("id" , "!=" , Auth::user()->id)->take(10)->get();
        } else {
            $users = User::inRandomOrder()->where("id" , "!=" , Auth::user()->id)->take(10)->get();
        }
        
        //取得したユーザーデータをviewに渡す
        return view('user/search',['users' => $users, 'cond_name' => $cond_name,]);
    }
    
    public function game(Request $request)
    {
        //データベースから指定したユーザーidだけを取得する
        $user = User::find($request->id);
        //取得したデータをviewに渡す
        return view('user/game',['user' => $user]);
    }
    public function user_comments(Request $request)
    {
        $user_comments = new UserComments;
        $form = $request->all();
        
        unset($form['_token']);
        
        $user_comments->fill($form);
        $user_comments->save();
        
        return redirect('user/game?id=' . $form['commented_id']);
        
    }
}

<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Game;
use App\User;

class GameController extends Controller
{
    public function home(Request $request)
    {
        //データベースのゲームデータを取得する
        $posts = Game::where('user_id', Auth::id())->get();
        //取得したゲームデータをviewに渡す
        return view('home',['posts' => $posts]);
    }
    
    public function userlist(Request $request)
    {
        //データベースのユーザーデータを取得する
        $cond_name = $request->cond_name;
        if ($cond_name !='') {
            $users = User::where('name', 'like', '%' . $cond_name  . '%')->where("id" , "!=" , Auth::user()->id)->get();
        } else {
            $users = User::where("id" , "!=" , Auth::user()->id)->get();
        }
        
        //取得したユーザーデータをviewに渡す
        return view('userlist',['users' => $users, 'cond_name' => $cond_name,]);
    }
    
    public function gameregister()
    {
        return view('gameregister');
    }
    
    public function register()
    {
        return view('auth.register');
    }
    
    public function create(Request $request)
    {
        
        $game = new Game;
        $form = $request->all();
        
        if (isset($form['game_img'])) {
            $path = $request->file('game_img')->store('public/image');
            $game->game_img = basename($path);
        } else {
            $game->game_img = null;
        }
        unset($form['_token']);
        unset($form['game_img']);
        
        $game->fill($form);
        $game->save();
        return redirect('game/home');
    }
    public function usergame()
    {
        //データベースから指定したユーザーidだけを取得する
        
        //取得したデータをviewに渡す
        return view('usergame');
    }
}

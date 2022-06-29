<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Game;
use App\User;
use App\GameComment;

class GameController extends Controller
{
    public function home(Request $request)
    {
        //データベースのゲームデータを取得する
        $posts = Game::where('user_id', Auth::id())->get();
        //取得したゲームデータをviewに渡す
        return view('home',['posts' => $posts]);
    }
    
    public function gameregister()
    {
        return view('game/register');
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
    public function gamesearch(Request $request)
    {
        $cond_game = $request->cond_game;
        if ($cond_game !='') {
            $games = Game::where('game_name', 'like', '%' . $cond_game . '%')->where("id" , "!=" , Auth::id())->get();
        } else {
            $games = Game::inRandomOrder()->where("id" , "!=" , Auth::id())->take(12)->get();
        }
        return view('game/search',['games' => $games, 'cond_game' => $cond_game,]);
    }
    public function detail(Request $request)
    {
        //指定されたゲームデータをデータベースから取得する
        $game = Game::find($request->id);
        //取得したデータをviewに渡す
        return view('game/detail',['game' => $game]);
    }
    public function game_comments(Request $request) 
    {
        $comments = new GameComment;
        $form = $request->all();
        
        unset($form['_token']);
        
        $comments->fill($form);
        $comments->save();
        
        return redirect('game/detail?id=' . $form['game_id']);
    }
}

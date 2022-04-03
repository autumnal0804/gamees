    @extends('layouts.app') 
    
    @section('title','マイゲーム')
    
    @section('content') 
    @push('css')
        <link href="{{ asset('css/game/search.css') }}" rel="stylesheet">
    @endpush
        <div class="container">
        <h2 class="title-name">ゲーム検索</h2>
            <div class="input-group cp_iptxt">
                <form action="{{ action('GameController@gamesearch') }}" method="get" enctype="multipart/form-data">
                    <div class="gamesearch_input">
                        <input type="text" class="form-control" placeholder="ゲームを検索する" name="cond_game" value="{{ $cond_game }}">
                    </div>
                    <div class="search_button">
                        検索
                        <span class="input-group-btn">
                            <button class="input-search-button file_input" type="submit"></button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="game-search-contents">
            @foreach($games as $game)
                <div class="game-search-item">
                    <div class="game-search-img-contents">
                        <img src="{{asset ('storage/image/' . $game->game_img) }}" alt="" class="game-search-img">
                    </div>
                    <p class="game-search-name">
                        {{ \Str::limit($game->game_name, 50) }}
                    </p>
                </div>
            @endforeach
            </div>
        </div>
    @endsection
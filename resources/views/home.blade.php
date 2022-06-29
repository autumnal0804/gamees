    @extends('layouts.app') 
    
    @section('title','マイゲーム')
    
    @section('content')
    @push('css')
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @endpush
    <div class="container">
        <h2 class="title-name">マイゲーム</h2>
        <div class="home-game-contents">
            @foreach($posts as $game)
            <div class="home-game-item">
                <a href="{{ action('GameController@detail' ,['id' => $game->id]) }}">
                    <div class="game-img-contents">
                        <img src="{{asset ('storage/image/' . $game->game_img) }}" alt="" class="home-game-img">
                    </div>
                </a>
                <p class="home-game-name">
                    {{ \Str::limit($game->game_name, 50) }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
    @extends('layouts.app') 
    
    @section('title','マイゲーム')
    
    @section('content')
    @push('css')
        <link href="{{ asset('css/user/game.css') }}" rel="stylesheet">
    @endpush
        <h2 class="title-name">{{ $user->name }}さんのマイゲーム</h2>
        <div class="container">
            <div class="usergame-contents">
                @foreach($user->games as $game)
                <div class="usergame-item">
                    <div class="usergame-img-contents">
                        <img src="{{asset ('storage/image/' . $game->game_img) }}" alt="" class="usergame-img">
                    </div>
                    <p class="usergame-name">
                        {{ \Str::limit($game->game_name, 50) }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    @endsection
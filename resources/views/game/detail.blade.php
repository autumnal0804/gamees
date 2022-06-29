    @extends('layouts.app') 
    
    @section('title','マイゲーム')
    
    @section('content')
    @push('css')
        <link href="{{ asset('css/game/detail.css') }}" rel="stylesheet">
    @endpush
    <div class="container">
        <div class="detail-game-img-contents">
            <div class="img-contents">
                <div class="detail-game-item">
                    <img src="{{asset ('storage/image/' . $game->game_img) }}" alt="" class="detail-game-img">
                </div>
            </div>
            <p class="detail-game-name">{{ \Str::limit($game->user->name, 50) }}さんの{{ \Str::limit($game->game_name, 50) }}</p>
        </div>
        @foreach($game->game_comments as $game_comment)
        <div class="user-comment-item">
            <div class="user-comment-user-icon">
                <img src="{{asset ('storage/user_img/' . $game_comment->user->user_img) }}" alt="" class="user-comments-icon-img">
            </div>
            <div>
                <p class="user-comment-user-name">{{ \Str::limit($game_comment->user->name, 20) }}</p>
                <div class="user-comments-area">
                    <p class="user-comment">
                        {{ \Str::limit($game_comment->contents, 150) }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
        <form action="{{ action('GameController@game_comments') }}" method="post" enctype="multipart/form-data">
            <dl class="search2">
                <dt>
                    <input type="text" name="contents" value="" placeholder="コメントを追加" />
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <input type="hidden" name="game_id" value="{{ $game->id }}">
                </dt>
                <dd>
                    <button type="submit" class="btn btn-outline-light">送信</button>
                </dd>
            </dl>
            {{ csrf_field() }}
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </div>
    @endsection
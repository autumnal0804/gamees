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
                    <a href="{{ action('GameController@detail' ,['id' => $game->id]) }}">
                        <div class="usergame-img-contents">
                            <img src="{{asset ('storage/image/' . $game->game_img) }}" alt="" class="usergame-img">
                        </div>
                    </a>
                    <p class="usergame-name">
                        {{ \Str::limit($game->game_name, 50) }}
                    </p>
                </div>
                @endforeach
            </div>
            @foreach($user->user_comments as $user_comment)
            <div class="user-comment-item">
                <div class="user-comment-user-icon">
                    <img src="{{asset ('storage/user_img/' . $user_comment->user->user_img) }}" alt="" class="user-comments-icon-img">
                </div>
                <div>
                    <p class="user-comment-user-name">{{ \Str::limit($user_comment->user->name, 20) }}</p>
                    <div class="user-comments-area">
                        <p class="user-comment">
                            {{ \Str::limit($user_comment->contents, 150) }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            <form action="{{ action('UsersController@user_comments') }}" method="post" enctype="multipart/form-data">
            <dl class="search2">
                <dt>
                    <input type="text" name="contents" value="" placeholder="コメントを追加" />
                    <input type="hidden" name="commenter_id" value="{{ Auth::id() }}">
                    <input type="hidden" name="commented_id" value="{{ $user->id }}">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
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
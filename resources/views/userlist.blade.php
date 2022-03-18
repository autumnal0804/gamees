    @extends('layouts.app') 
    
    @section('title','マイゲーム')
    
    @section('content') 
    @push('css')
        <link href="{{ asset('css/userlist.css') }}" rel="stylesheet">
    @endpush
        <div class="container">
            <div class="input-group cp_iptxt">
                <form action="{{ action('GameController@userlist') }}" method="get" enctype="multipart/form-data">
                    <div class="usersearch_input">
                        <input type="text" class="form-control" placeholder="ユーザーを検索する" name="cond_name" value="{{ $cond_name }}">
                    </div>
                    <div class="search_button">
                        検索
                        <span class="input-group-btn">
                            <button class="input-search-button file_input" type="submit"></button>
                        </span>
                    </div>
                </form>
            </div>
            <h2 class="title-name">ユーザー一覧</h2>
            @foreach($users as $user)
            <div class="userlist-contents">
                <a href="/game/usergame" class="userlist-item">
                    <div class="userlist-user-contents">
                        <img src="{{asset('storage/user_img/' . $user->user_img) }}" alt="" class="userlist-user-icon" >
                    </div>
                    <div class="userlist-name-contents">
                        <p  class="userlist-username">{{ \Str::limit($user->name, 50) }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    @endsection
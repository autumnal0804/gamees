    @extends('layouts.app') 
    
    @section('title','マイゲーム')
    
    @section('content') 
    @push('css')
        <link href="{{ asset('css/user/search.css') }}" rel="stylesheet">
    @endpush
        <div class="container">
            <h2 class="title-name">ユーザー検索</h2>
            <div class="input-group cp_iptxt">
                <form action="{{ action('GameController@usersearch') }}" method="get" enctype="multipart/form-data">
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
            @foreach($users as $user)
            <div class="userlist-contents">
                <a href="{{ action('GameController@usergame' ,['id' => $user->id]) }}"  class="userlist-item">
                    <div class="userlist-user-contents">
                        <img src="{{asset('storage/user_img/' . $user->user_img) }}" alt="" class="userlist-user-icon" >
                    </div>
                    <div class="userlist-name-contents">
                        <p  class="userlist-user-name">{{ \Str::limit($user->name, 50) }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    @endsection
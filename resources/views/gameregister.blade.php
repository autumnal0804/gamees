    @extends('layouts.app') 
    
    @section('title','マイゲーム')
    
    @section('content')
    @push('css')
        <link href="{{ asset('css/gameregister.css') }}" rel="stylesheet">
    @endpush
    <div class="container">
        <h2 class="title-name">{{ Auth::user()->name }}さんのゲーム登録</h2>
        <div class="gameregister-game-contetnts">
            <form action="{{ action('GameController@create') }}" method="post" enctype="multipart/form-data">
                <div class="gameregister-file-contents">
                    <label for="register-button-img">
                        <img src="{{ asset('img/upload.png') }}" alt="" class="gameregister-img" id="register-game-img">
                        <input type="file" id="register-button-img" name="game_img">
                    </label>
                </div>
                <div class="cp_iptxt">
                    <input type="text" placeholder="ゲーム名" name="game_name">
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <div class="gameregister-send-button">
                    <p>
                        <input type="submit" value="登録">
                    </p>
                </div>
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
    </div>
    @endsection
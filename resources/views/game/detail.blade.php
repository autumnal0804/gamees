    @extends('layouts.app') 
    
    @section('title','マイゲーム')
    
    @section('content')
    @push('css')
        <link href="{{ asset('css/game/detail.css') }}" rel="stylesheet">
    @endpush
    <h2></h2>
    <div class="container">
        <div class="detail-game-img-contents">
            <div class="detail-game-item">
                <img src="https://source.unsplash.com/random/" alt="" class="detail-game-img">
            </div>
            <p class="detail-game-name">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
        </div>
        <div class="user-comment-contents">
            <div class="user-comment-item">
                <div class="user-comment-user-icon">
                    <img src="https://source.unsplash.com/random/" alt="" class="usre-comment-icon-img">
                </div>
                <p class="user-comment-user-name">XXXXXXXXXXXXXXXXXXXX</p>
            </div>
            <div class="user-comment-area">
                <p class="user-comment">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                </p>
            </div>
        </div>
    </div>
    @endsection
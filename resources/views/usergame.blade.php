    @extends('layouts.app') 
    
    @section('title','マイゲーム')
    
    @section('content')
    @push('css')
        <link href="{{ asset('css/usergame.css') }}" rel="stylesheet">
    @endpush
        <h2 class="title-name">{{ Auth::user()->name }}さんのゲーム</h2>
        <div class="container">
            <div class="usergame-contents">
                <div class="usergame-item">
                    <div class="usergame-img-contents">
                        <img src="https://source.unsplash.com/random/" alt="" class="usergame-img">
                    </div>
                    <p class="usergame-name">
                        XXXXXXXXXXXXX
                    </p>
                </div>
                <div class="usergame-item">
                    <div class="usergame-img-contents">
                        <img src="https://source.unsplash.com/random/" alt="" class="usergame-img">
                    </div>
                    <p class="usergame-name">
                        XXXXXXXXXXXXX
                    </p>
                </div>
            </div>
            <div class="usergame-contents">
                <div class="usergame-item">
                    <div class="usergame-img-contents">
                        <img src="https://source.unsplash.com/random/" alt="" class="usergame-img">
                    </div>
                    <p class="usergame-name">
                        XXXXXXXXXXXXX
                    </p>
                </div>
                <div class="usergame-item">
                    <div class="usergame-img-contents">
                        <img src="https://source.unsplash.com/random/" alt="" class="usergame-img">
                    </div>
                    <p class="usergame-name">
                        XXXXXXXXXXXXX
                    </p>
                </div>
            </div>
            <div class="usergame-contents">
                <div class="usergame-item">
                    <div class="usergame-img-contents">
                        <img src="https://source.unsplash.com/random/" alt="" class="usergame-img">
                    </div>
                    <p class="usergame-name">
                        XXXXXXXXXXXXX
                    </p>
                </div>
                <div class="usergame-item">
                    <div class="usergame-img-contents">
                        <img src="https://source.unsplash.com/random/" alt="" class="usergame-img">
                    </div>
                    <p class="usergame-name">
                        XXXXXXXXXXXXX
                    </p>
                </div>
            </div>
        </div>
    @endsection
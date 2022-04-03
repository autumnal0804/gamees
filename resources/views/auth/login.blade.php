<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>register</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link href="{{ asset('css/auth/login.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class-"logo-img-contents">
                                <img src="{{ asset('img/logo.png') }}" alt="" class="logo-img" id="logo-game-img">
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
        
                            <div class="form-group row cp_iptxt">
                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="メールアドレス">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </div>
                            <div class="form-group row cp_iptxt">
                                <label for="password" class="col-md-4 col-form-label text-md-right">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="パスワード">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </div>
                                <div class="form-group row mb-0">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            ログインパスワードを忘れた方
                                        </a>
                                    @endif
                                </div>
                                <div class="form-group row mb-0 register_button">
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        新規作成
                                    </a>
                                </div>
                                <div class="col-md-8 offset-md-4 login_button">
                                ログイン
                                    <button type="submit" class="file_input btn btn-primary">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

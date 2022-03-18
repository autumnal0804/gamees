<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>register</title>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <link href="{{ asset('css/auth/register.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">      
                    <div class="card-body">
                        <div class-"logo-img-contents">
                            <img src="{{ asset('img/logo.png') }}" alt="" class="logo-img" id="logo-game-img">
                        </div>
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row cp_iptxt">
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  placeholder="ユーザーネーム">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                        </div>
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
                        <div class="form-group row cp_iptxt">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="確認用パスワード">
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="user_img" class="col-md-4 col-form-label text-md-right">
                                <div class="col-md-6 file_button">
                                    プロフィール画像を選択
                                    <input id="user_img" type="file" class="file_input form-control @error('user_img') is-invalid @enderror" name="user_img" value="{{ old('user_img') }}" required autocomplete="user_img">
                                @error('user_img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </label>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 register_button">
                            登録
                                <button type="submit" class="file_input btn btn-primary">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
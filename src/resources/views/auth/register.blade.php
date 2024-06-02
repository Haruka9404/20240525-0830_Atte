@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css')}}">
@endsection

@section('header')
@endsection

@section('content')
<div class="content">
    <div class="content-title">
        <div class="content-title__inner">
            <p>会員登録</p>
        </div>
    </div>

    <form class="content-form" action="/register" method="post">
        @csrf
        <div class="content-form__user">
            <div class="content-form__user__name">
                <input type="text" name="name" placeholder="名前" />
            </div>
            <div class="form__error">
            @error('name')
                {{ $message }}
            @enderror
            </div>

            <div class="content-form__user__email">
                <input type="email" name="email" placeholder="メールアドレス" />
            </div>
            <div class="form__error">
            @error('email')
                {{ $message }}
            @enderror
            </div>

            <div class="content-form__user__password">
                <input type="password" name="password" placeholder="パスワード" />
                {{-- ここのTypeまたはnameはテーブルのカラム名と一緒がいい？ --}}
            </div>
            <div class="form__error">
            @error('password')
                {{ $message }}
            @enderror
            </div>

            <div class="content-form__user__password-confirmation">
                <input type="password" name="password_confirmation" placeholder="確認用パスワード" />
            </div>

        </div>
        <div class="content-form__buttom">
            <button class="content-form__buttom__submit" type="submit">会員登録</button>
        </div>
    </form>

    <div class="content-login">
        <div class="content-login__text">アカウントをお持ちの方はこちらから</div>
        <a class="content-login__link" href="/login">ログイン</a>
    </div>
</div>
@endsection('content')
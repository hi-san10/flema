<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flema</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
    <script src="{{ asset('js/script.js') }}" defer></script>
    <style>
input[type="checkbox"] {
  color: blue;
}
</style>
</head>
<body>
    <div class="flema">
        <header class="header">
            <div class="header_logo">
                <a class="header_logo-link" href="{{ route('index') }}">flema</a>
            </div>
            <div class="search">
                <form class="search__form" action="{{ route('index') }}">
                    <input class="search__form-word" type="text" name="search_word" placeholder="     なにをお探しですか？">
                </form>
            </div>
            <div class="header__nav">
                @if(Auth::check())
                <form action="/logout" method="post">
                    @csrf
                    <button class="nav__btn logout__btn">ログアウト</button>
                </form>
                <a class="nav__btn" href="{{ route('mypage', ['id' => Auth::id()]) }}">マイページ</a>
                @else
                <a class="nav__btn" href="/login">ログイン</a>
                <a class="nav__btn" href="{{ route('mypage') }}">マイページ</a>
                @endif
                <a class="nav__btn--box" href="/sell"><span>出品</span></a>
            </div>
        </header>
        @yield('content')
    </div>
</body>
</html>

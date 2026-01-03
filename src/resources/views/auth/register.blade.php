<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashionably Late</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
</head>

<body>
    <header class="header">
        <h1 class="header__inner">
            <a href="">
                Fashionably Late
            </a>
        </h1>
        <div class="header__login">
            <a href="/login">login</a>
        </div>
    </header>
    <main class="main">
        <div class="auth__heading">
            <h2>Register</h2>
        </div>
        <div class="auth__content">
            <form action="/register" method="post">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="name">お名前</label>
                    <input class="form-input" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="例：山田太郎">
                    <div class="form-error">
                        @error('name')
                        {{ $errors->first('name') }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">メールアドレス</label>
                    <input class="form-input" type="text" id="email" name="email" value="{{ old('email') }}" placeholder="例：test@example.com">
                    <div class="form-error">
                        @error('email')
                        {{ $errors->first('email') }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">パスワード</label>
                    <input class="form-input" type="password" id="password" name="password" placeholder="例：coachtech1106">
                    <div class="form-error">
                        @error('password')
                        {{ $errors->first('password') }}
                        @enderror
                    </div>
                </div>
                <div class="auth-button">
                    <button class="auth-button__submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
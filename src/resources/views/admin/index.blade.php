<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashionably Late</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
    <header class="header">
        <h1 class="header__inner">
            <a href="">
                Fashionably Late
            </a>
        </h1>
        <button class="header__logout">logout</button>
    </header>
    <main>
        <div class="admin__content">
            <div class="admin__heading">
                <h2>Admin</h2>
            </div>
            <form action="/search" method="get">
                <div class="admin__input">
                    <div class="admin__input-text">
                        <input type="text" name="input" value="{{request('input')}}" placeholder="名前やメールアドレスを入力してください">
                    </div>
                    <select class="admin__input-select" name="gender" id="">
                        <option value="">性別</option>
                        <option value="1">男性</option>
                        <option value="2">女性</option>
                        <option value="3">その他</option>
                    </select>
                    <select class="admin__input-select" name="detail" id="">
                        <option value="">お問い合わせの種類</option>
                        @foreach($categories as $category)
                        <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                        @endforeach
                    </select>
                    <select class="admin__input-select" name="" id="">
                        <option value="">年/月/日</option>
                    </select>
                    <button class="admin__input-search">検索</button>
                    <button class="admin__input-reset">リセット</button>
                </div>
            </form>
            <button class="admin__export">エクスポート</button>
            ページ
            <table class="table">
                <tr class="table__header">
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th></th>
                </tr>
                @foreach($contacts as $contact)
                <tr class="table__description">
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->gender}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->detail}}</td>
                    <td>
                        <button class="table__description-detail">詳細</button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>
</body>

</html>
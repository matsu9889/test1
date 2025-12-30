<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashionably Late</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
    <header class="header">
        <h1 class="header__inner">
            <a href="">
                Fashionably Late
            </a>
        </h1>
        <div>logout</div>
    </header>
    <main>
        <div>
            <h2>Admin</h2>
        </div>
        <form action="/search" method="get">
            <input type="text" name="input" value="{{request('input')}}" placeholder="名前やメールアドレスを入力してください">
            <select name="gender" id="">
                <option value="">性別</option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>
            <select name="detail" id="">
                <option value="">お問い合わせの種類</option>
                @foreach($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                @endforeach
            </select>
            <select name="" id="">
                <option value="">年/月/日</option>
            </select>
            <button>検索</button>
        </form>
        <button>リセット</button>
        <button>エクスポート</button>
        ページ
        <table>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
            </tr>
            @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->gender}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->detail}}</td>
                <td>詳細</td>
            </tr>
            @endforeach
        </table>
    </main>
</body>

</html>
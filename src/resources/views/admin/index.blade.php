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
            <div class="admin-controls">
                <button class="export">エクスポート</button>
                @foreach ($authors as $author)
                <div class="Pagination">
                    {{$author->name}}
                </div>
                @endforeach

                <!-- コピペ -->
                <div class="custom-pagination">
                    {{-- 前ページ --}}
                    <a href="{{ $authors->url(max($authors->currentPage() - 1, 1)) }}" class="arrow">&lt;</a>

                    @for ($i = 1; $i <= $authors->lastPage(); $i++)
                        <a href="{{ $authors->url($i) }}" class="{{ $i == $authors->currentPage() ? 'active' : '' }}">
                            {{ $i }}
                        </a>
                        @endfor

                        {{-- 次ページ（常に表示） --}}
                        <a href="{{ $authors->url(min($authors->currentPage() + 1, $authors->lastPage())) }}" class="arrow">&gt;</a>
                </div>
            </div>


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
                    <td>{{$contact->category_id}}</td>
                    <td>
                        <button class="table__description-detail" onclick="document.getElementById('modal').showModal()">
                            詳細
                        </button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>
    <dialog id="modal">
        <div class="modal">
            <div class="modal__content">
                <button type="button" class="modal-close">&times;</button>
                <table class="modal__table">
                    <tr class="modal__table-row">
                        <th>お名前</th>
                        <td>山田 太郎</td>
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td>男性</td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>test@example.com</td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>08012345678</td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td>東京都渋谷区千駄ヶ谷1-2-3</td>
                    </tr>
                    <tr>
                        <th>建物名</th>
                        <td>千駄ヶ谷マンション101</td>
                    </tr>
                    <tr>
                        <th>お問い合わせの種類</th>
                        <td>商品の交換について</td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td>
                            ここにお問い合わせ本文が入ります
                        </td>
                    </tr>
                </table>
                <form action=""></form>
                <div class="modal__button">
                    <button class="modal__button-delete">削除</button>
                </div>
            </div>
        </div>
    </dialog>
</body>

</html>
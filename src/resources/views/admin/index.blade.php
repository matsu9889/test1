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
            <a href="/admin">
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
            <form action="/admin/search" method="get">
                <div class="admin__input">
                    <div class="admin__input-text">
                        <input type="text" name="keyword" value="{{request('keyword')}}" placeholder="名前やメールアドレスを入力してください">
                    </div>
                    <select class="admin__input-select" name="gender" id="">
                        <option value="">性別</option>
                        <option value="1">男性</option>
                        <option value="2">女性</option>
                        <option value="3">その他</option>
                    </select>
                    <select class="admin__input-select" name="category_id" id="">
                        <option value="">お問い合わせの種類</option>
                        @foreach($categories as $category)
                        <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                        @endforeach
                    </select>
                    <input class="admin__date" type="date" name="created_at">
                    <button class="admin__input-search" type="submit">検索</button>
                    <button class="admin__input-reset" type="reset">リセット</button>
                </div>
            </form>
            <div class="admin-controls">
                <button class="export">エクスポート</button>
                <div class="custom-pagination">
                    <a href="{{ $contacts->url(max($contacts->currentPage() - 1, 1)) }}" class="arrow">&lt;</a>

                    @for ($i = 1; $i <= $contacts->lastPage(); $i++)
                        <a href="{{ $contacts->url($i) }}" class="{{ $i == $contacts->currentPage() ? 'active' : '' }}">
                            {{ $i }}
                        </a>
                        @endfor

                        <a href="{{ $contacts->url(min($contacts->currentPage() + 1, $contacts->lastPage())) }}" class="arrow">&gt;</a>
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
                <tr class="table__description"
                    data-name="{{ $contact->full_name }}"
                    data-gender="{{ $contact->gender_label }}"
                    data-email="{{ $contact->email }}"
                    data-category="{{ $contact->category->content }}"
                    data-tel="{{ $contact->tel }}"
                    data-address="{{ $contact->address }}"
                    data-building="{{ $contact->building }}"
                    data-detail="{{ $contact->detail }}"
                    data-id="{{ $contact->id }}">
                    <td>{{$contact->full_name}}</td>
                    <td>{{$contact->gender_label}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->category->content}}</td>
                    <td>
                        <button class="table__description-detail">
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
                <button class="modal__close" type="button" id="modal-close">&times;</button>
                <table class="modal__table">
                    <tr class="modal__table-row">
                        <th>お名前</th>
                        <td id="modal-name"></td>
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td id="modal-gender"></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td id="modal-email"></td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td id="modal-tel"></td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td id="modal-address"></td>
                    </tr>
                    <tr>
                        <th>建物名</th>
                        <td id="modal-building"></td>
                    </tr>
                    <tr>
                        <th>お問い合わせの種類</th>
                        <td id="modal-category"></td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td id="modal-detail">
                        </td>
                    </tr>
                </table>
                <form class="modal__delete-form" id="modal-delete-form" action="/admin/delete" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="modal__delete-button">
                        <button class="modal__delete-submit" type="submit">削除</button>
                    </div>
                </form>
            </div>
        </div>
    </dialog>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('modal');
        const closeBtn = document.getElementById('modal-close');

        // 各行にクリックイベント
        document.querySelectorAll('.table__description-detail').forEach(button => {
            button.addEventListener('click', function() {
                const tr = this.closest('tr');

                // モーダルに値をセット
                document.getElementById('modal-name').textContent = tr.dataset.name;
                document.getElementById('modal-gender').textContent = tr.dataset.gender;
                document.getElementById('modal-email').textContent = tr.dataset.email;
                document.getElementById('modal-tel').textContent = tr.dataset.tel;
                document.getElementById('modal-address').textContent = tr.dataset.address;
                document.getElementById('modal-building').textContent = tr.dataset.building;
                document.getElementById('modal-category').textContent = tr.dataset.category;
                document.getElementById('modal-detail').textContent = tr.dataset.detail;

                // 削除フォームの action をセット
                document.getElementById('modal-delete-form').action = `/admin/delete/${tr.dataset.id}`;

                // モーダル表示
                modal.showModal();
            });
        });

        // ×ボタンで閉じる
        closeBtn.addEventListener('click', function() {
            modal.close();
        });
    });
</script>
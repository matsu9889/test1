<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashionably Late</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <h1 class="header__inner">
            <a href="">
                Fashionably Late
            </a>
        </h1>
    </header>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="contact-form" action="/confirm" method="post">
                @csrf
                <div class="contact-form__group">
                    <div class="contact-form__group-title">
                        <label for="family-name">お名前<span class="form__label--item"> ※</span></label>
                    </div>
                    <div class="contact-form__group-name">
                        <input class="contact-form__item" type="text" name="family-name" id="family-name" value="例:山田">
                        <input class="contact-form__item" type="text" name="given-name" id="given-name" value="例:太郎">
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group-title">
                        <label for="gender">性別<span class="form__label--item"> ※</span></label>
                    </div>
                    <div class="contact-form__group-gender">
                        <div class="contact-form__item-gender">
                            <input type="radio" name="gender" id="men" value="men">
                            <label for="men">男性</label>
                        </div>
                        <div class="contact-form__item-gender">
                            <input type="radio" name="gender" id="women" value="women">
                            <label for="women">女性</label>
                        </div>
                        <div class="contact-form__item-gender">
                            <input type="radio" name="gender" id="others" value="others">
                            <label for="others">その他</label>
                        </div>
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group-title">
                        <label for="email">メールアドレス<span class="form__label--item"> ※</span></label>
                    </div>
                    <div class="contact-form__group-email">
                        <input class="contact-form__item-email" type="email" name="email" id="email" value="例:test@example.com">
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group-title">
                        <label for="number1">電話番号<span class="form__label--item"> ※</span></label>
                    </div>
                    <div class="contact-form__group-number">
                        <input class="contact-form__item-number" type="tel" name="number1" id="number1" value="080">&#45;
                        <input class="contact-form__item-number" type="tel" name="number2" id="number2" value="1234">&#45;
                        <input class="contact-form__item-number" type="tel" name="number3" id="number3" value="5678">
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group-title">
                        <label for="address">住所<span class="form__label--item"> ※</span></label>
                    </div>
                    <div class="contact-form__group-address">
                        <input class="contact-form__item-address" type="text" name="address" id="address" value="例:東京都渋谷区千駄ヶ谷1-2-3">
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group-title">
                        <label for="building">建物名</label>
                    </div>
                    <div class="contact-form__group-building">
                        <input class="contact-form__item-building" type="text" name="building" id="building" value="例:千駄ヶ谷マンション101">
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group-title">
                        <label for="kinds">お問い合わせの種類<span class="form__label--item"> ※</span></label>
                    </div>
                    <div class="contact-form__group-kinds">
                        <select class="contact-form__item-kinds" name="kinds" id="kinds">
                            <option value="">選択してください</option>
                            <option value="">選択してください</option>
                            <option value="">選択してください</option>
                        </select>
                    </div>
                </div>
                <div class="contact-form__group">
                    <div class="contact-form__group-title">
                        <label for="content">お問い合わせ内容<span class="form__label--item"> ※</span></label>
                    </div>
                    <div class="contact-form__group-content">
                        <textarea class="contact-form__item-content" name="content" id="content">お問い合わせ内容をご記載ください</textarea>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">
                        確認画面
                    </button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>
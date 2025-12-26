<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashionably Late</title>
</head>

<body>
    <header>
        <h1>Fashionably Late</h1>
    </header>
    <main>
        <div>
            <h2>Contact</h2>
        </div>
        <form action="">
            <div class="contact-form__group">
                <label for="family-name">お名前<span> ※</span></label>
                <input type="text" name="family-name" id="family-name" value="例:山田">
                <input type="text" name="given-name" id="given-name" value="例:太郎">
            </div>
            <div class="contact-form__group">
                <label for="gender">性別<span> ※</span></label>

                <input type="radio" name="gender" id="men" value="men">
                <label for="men">男性</label>
                <input type="radio" name="gender" id="women" value="women">
                <label for="women">女性</label>
                <input type="radio" name="gender" id="others" value="others">
                <label for="others">その他</label>
            </div>
            <div class="contact-form__group">
                <label for="email">メールアドレス<span> ※</span></label>
                <input type="email" name="email" id="email" value="例:test@example.com">
            </div>
            <div class="contact-form__group">
                <label for="number1">電話番号<span> ※</span></label>
                <input type="tel" name="number1" id="number1" value="080">&#45;
                <input type="tel" name="number2" id="number2" value="1234">&#45;
                <input type="tel" name="number3" id="number3" value="5678">
            </div>
            <div class="contact-form__group">
                <label for="address">住所<span> ※</span></label>
                <input type="text" name="address" id="address" value="例:東京都渋谷区千駄ヶ谷1-2-3">
            </div>
            <div class="contact-form__group">
                <label for="building">建物名</label>
                <input type="text" name="building" id="building" value="例:千駄ヶ谷マンション101">
            </div>
            <div class="contact-form__group">
                <label for="kinds">お問い合わせの種類<span> ※</span></label>
                <select name="kinds" id="kinds">
                    <option value="">選択してください</option>
                    <option value="">選択してください</option>
                    <option value="">選択してください</option>
                </select>
            </div>
            <div class="contact-form__group">
                <label for="content">お問い合わせ内容<span> ※</span></label>
                <textarea name="content" id="content">お問い合わせ内容をご記載ください</textarea>
            </div>
            <div>
                <button type="submit">
                    確認画面
                </button>
            </div>
        </form>
    </main>

</body>

</html>
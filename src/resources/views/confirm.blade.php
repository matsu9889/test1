@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Confirm</h2>
    </div>
    <form class="contact-form" action="" method="">
        @csrf
        <table class="contact-table">
            <tr class="contact-table__row">
                <th class="contact-table__header">お名前</th>
                <td class="contact-table__item">あああ</td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">性別</th>
                <td class="contact-table__item">あああ</td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">メールアドレス</th>
                <td class="contact-table__item">あああ</td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">電話番号</th>
                <td class="contact-table__item">あああ</td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">住所</th>
                <td class="contact-table__item">あああ</td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">建物名</th>
                <td class="contact-table__item">あああ</td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">お問い合わせの種類</th>
                <td class="contact-table__item">あああ</td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">お問い合わせ内容</th>
                <td class="contact-table__item">あああ</td>
            </tr>
        </table>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
            <a class="form__button-correction" href="/">修正</a>
        </div>
    </form>
</div>
@endsection
@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')

<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Confirm</h2>
    </div>
    <table class="contact-table">
        <tr class="contact-table__row">
            <th class="contact-table__header">お名前</th>
            <td class="contact-table__item">
                <input type="text" name="name" value="{{ $contact['first_name'] }} {{ $contact['last_name'] }}" readonly />
                <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
            </td>
        </tr>
        <tr class="contact-table__row">
            <th class="contact-table__header">性別</th>
            <td class="contact-table__item">
                <input type="text" value="{{ $contact['gender_text'] }}" readonly />
                <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
            </td>
        </tr>
        <tr class="contact-table__row">
            <th class="contact-table__header">メールアドレス</th>
            <td class="contact-table__item">
                <input type="text" name="email" value="{{ $contact['email'] }}" readonly />
            </td>
        </tr>
        <tr class="contact-table__row">
            <th class="contact-table__header">電話番号</th>
            <td class="contact-table__item">
                <input type="text" value="{{ $contact['tel'] }}" readonly />
                <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
            </td>
        </tr>
        <tr class="contact-table__row">
            <th class="contact-table__header">住所</th>
            <td class="contact-table__item">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
            </td>
        </tr>
        <tr class="contact-table__row">
            <th class="contact-table__header">建物名</th>
            <td class="contact-table__item">
                <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
            </td>
        </tr>
        <tr class="contact-table__row">
            <th class="contact-table__header">お問い合わせの種類</th>
            <td class="contact-table__item">
                <input type="text" name="content" value="{{ $contact['category_text'] }}" readonly />
                <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}" readonly />
            </td>
        </tr>
        <tr class="contact-table__row">
            <th class="contact-table__header">お問い合わせ内容</th>
            <td class="contact-table__item">
                <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
            </td>
        </tr>
    </table>
    <div class="form__button">
        <form class="contact-form" action="/thanks" method="post">
            @csrf
            <button class="contact-form__button-submit" type="submit">送信</button>
        </form>
        <form class="correction-form" action="/" method="get">
            @foreach($contact as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endforeach
            <button class="correction-form__button" type="submit">修正</button>
        </form>
    </div>
</div>

@endsection
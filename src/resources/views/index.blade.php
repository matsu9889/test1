@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="contact-form" action="/confirm" method="post">
        @csrf
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <label for="first_name">お名前<span class="form__label--item"> ※</span></label>
            </div>
            <div class="contact-form__group-name">
                <div class="contact-form__item">
                    <input class="contact-form__item-input" type="text" name="first_name" id="first_name" placeholder="例:山田" value="{{ old('first_name', request('first_name')) }}">
                    <div class="contact-form__error">
                        @error('first_name')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class=" contact-form__item">
                    <input class="contact-form__item-input" type="text" name="last_name" id="last_name" placeholder="例:太郎" value="{{ old('last_name', request('last_name')) }}">
                    <div class="contact-form__error">
                        @error('last_name')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <label for="gender">性別<span class="form__label--item"> ※</span></label>
            </div>
            <div class="contact-form__group-gender">
                <div class="contact-form__gender">
                    <div class="contact-form__gender-item">
                        <input type="radio" name="gender" id="men" value="1">
                        <label for="men">男性</label>
                    </div>
                    <div class="contact-form__gender-item">
                        <input type="radio" name="gender" id="women" value="2">
                        <label for="women">女性</label>
                    </div>
                    <div class="contact-form__gender-item">
                        <input type="radio" name="gender" id="others" value="3">
                        <label for="others">その他</label>
                    </div>
                </div>
                <div class="contact-form__error">
                    @error('gender')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <label for="email">メールアドレス<span class="form__label--item"> ※</span></label>
            </div>
            <div class="contact-form__group-email">
                <div class="contact-form__email">
                    <input class="contact-form__item-email" type="text" name="email" id="email" placeholder="例:test@example.com" value="{{ old('email', request('email')) }}">
                    <div class="contact-form__error">
                        @error('email')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <label for="tel1">電話番号<span class="form__label--item"> ※</span></label>
            </div>
            <div class="contact-form__group-tel">
                <div class="contact-form__tel">
                    <input class="contact-form__item-tel" type="tel" name="tel1" id="tel1" placeholder="080">&#45;
                    <input class="contact-form__item-tel" type="tel" name="tel2" id="tel2" placeholder="1234">&#45;
                    <input class="contact-form__item-tel" type="tel" name="tel3" id="tel3" placeholder="5678">
                </div>
                <div class="contact-form__error">
                    @if ($errors->has('tel1'))
                    {{ $errors->first('tel1') }}
                    @elseif ($errors->has('tel2'))
                    {{ $errors->first('tel2') }}
                    @elseif ($errors->has('tel3'))
                    {{ $errors->first('tel3') }}
                    @endif
                </div>
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <label for="address">住所<span class="form__label--item"> ※</span></label>
            </div>
            <div class="contact-form__group-address">
                <input class="contact-form__item-address" type="text" name="address" id="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address', request('address')) }}">
                <div class="contact-form__error">
                    @error('address')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <label for="building">建物名</label>
            </div>
            <div class="contact-form__group-building">
                <input class="contact-form__item-building" type="text" name="building" id="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building', request('building')) }}">
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <label for="category_id">お問い合わせの種類<span class="form__label--item"> ※</span></label>
            </div>
            <div class="contact-form__group-kinds">
                <select class="contact-form__item-kinds" name="category_id" id="category_id">
                    <option value="">選択してください</option>
                    @foreach($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                    @endforeach
                </select>
                <div class="contact-form__error">
                    @error('category_id')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <label for="detail">お問い合わせ内容<span class="form__label--item"> ※</span></label>
            </div>
            <div class="contact-form__group-detail">
                <textarea class="contact-form__item-detail" name="detail" id="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail', request('detail')) }}</textarea>
                <div class="contact-form__error">
                    @error('detail')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">
                確認画面
            </button>
        </div>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('css')
    <Link rel="stylesheet" href="{{ asset('css/index.css') }}"/>>
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        Contact
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">＊</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text-inline">
                    <input class="form__input--name" type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}" />
                    <!--<input class="form__input--name" type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}" />-->
                </div>
                <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">＊</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <input class="form__input--gender" id="men" type="radio" name="gender" value="1" checked>
                    <label for="men" name="gender" value="1">男性</label>
                    <input class="form__input--gender" id="women" type="radio" name="gender" value="2">
                    <label for="women" name="gender" value="2">女性</label>
                    <input class="form__input--gender" id="author" type="radio" name="gender" value="3">
                    <label for="author" name="gender" value="3">その他</label>
                </div>
                <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">＊</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="form__input--name" type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">＊</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text-inline">
                    <input class="form__input--name" type="tel" name="tel" placeholder="例: 080" value="{{ old('tel') }}" /><!---
                    <input class="form__input--name" type="tel" name="tel2" placeholder="例: 1234" value="{{ old('tel2') }}" />-
                    <input class="form__input--name" type="tel" name="tel3" placeholder="例: 5678" value="{{ old('tel3') }}" />-->
                </div>
                <div class="form__error">
                @error('tel')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">＊</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="form__input--name" type="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                </div>
                <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <input class="form__input--name" type="building" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">＊</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <select class="inquiry_type" name="detail" required>
                        <option value="">選択してください</option>
                        <option value="商品の交換について">商品の交換について</option>
                    </select>
                </div>
                <div class="form__error">
                @error('detail')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">＊</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <textarea class="form__input--name" name="content" placeholder="お問い合わせ内容をご記載ください" required value="{{ old('content') }}" ></textarea>
                </div>
                <div class="form__error">
                @error('content')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection
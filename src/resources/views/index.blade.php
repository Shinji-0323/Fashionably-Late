@extends('layouts.app')

@section('css')
    <Link rel="stylesheet" href="{{ asset('css/index.css') }}"/>>
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <label for="name">お名前 <span class="required">*</span></label>
            </div>
            <div class="form__group-content">
                <input type="text" name="name" placeholder="例: 山田">
                <input type="text" name="name" placeholder="例: 太郎">
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label>性別 <span class="required">*</span></label>
                <div class="radio__group">
                    <input type="radio" name="gender" value="男性" required>
                    <label for="male">男性</label>
                    <input type="radio" name="gender" value="女性">
                    <label for="female">女性</label>
                    <input type="radio" name="gender" value="その他">
                    <label for="other">その他</label>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label for="email">メールアドレス <span class="required">*</span></label>
                <input type="email" name="email" placeholder="例: test@example.com">
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label for="tel">電話番号 <span class="required">*</span></label>
                <input type="tel" name="tel" placeholder="例: 080-1234-5678">
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label for="address">住所 <span class="required">*</span></label>
                <input type="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label for="building">建物名</label>
                <input type="building" name="building" placeholder="例: 千駄ヶ谷マンション101">
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label for="detail">お問い合わせの種類 <span class="required">*</span></label>
                <select id="inquiry_type" name="detail" required>
                    <option value="detail">選択してください</option>
                    <option value="detail">商品の交換について</option>
                </select>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label for="content">お問い合わせ内容 <span class="required">*</span></label>
                <textarea name="content" placeholder="お問い合わせ内容をご記載ください" required></textarea>
            </div>
        </div>
        <div class="form__group">
            <button type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection
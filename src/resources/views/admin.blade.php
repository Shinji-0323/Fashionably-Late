@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection

@section('nav')
<nav>
    <ul class="header-nav">
        @if (Auth::check())
        <li class="header-nav__item">
            <form class="form" action="/logout" method="post">
                @csrf
                <button class="header-nav__button">logout</button>
            </form>
        </li>
        @endif
    </ul>
</nav>
@endsection

@section('content')
<div class="register__content">
    <div class="register-form__heading">
        <h2>Admin</h2>
    </div>
    <div class="filter-bar">
        <input type="text" placeholder="名前やメールアドレスを入力してください">
        <select>
            <option value="">性別</option>
            <option value="male">男性</option>
            <option value="female">女性</option>
        </select>
        <select>
            <option value="">お問い合わせの種類</option>
            <option value="exchange">商品の交換について</option>
            <option value="refund">商品の返金について</option>
        </select>
        <select>
            <option value="">年/月/日</option>
        </select>
        <button class="search">検索</button>
        <button class="reset">リセット</button>
        <button class="export">エクスポート</button>
    </div>
    <table>
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>山田 太郎</td>
                <td>男性</td>
                <td>test@example.com</td>
                <td>商品の交換について</td>
                <td><button class="detail">詳細</button></td>
            </tr>
            <!-- 繰り返し -->
        </tbody>
    </table>
    <div class="pagination">
        <button>&lt;</button>
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
        <button>5</button>
        <button>&gt;</button>
    </div>
</div>
@endsection
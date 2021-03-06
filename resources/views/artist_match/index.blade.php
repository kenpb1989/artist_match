@extends('layouts.layout')

@section('title', 'top')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-2">
        <div class="container">
            <p></p>
            <h5>ユーザー検索</h5>
                <form action="{{ route('list') }}" method="get">
                    <input type="text" name="search_word">

                    <select name="pref_id">
                        <option value="">活動地域</option>
                        @foreach ($prefs as $pref)
                            @unless($pref->id === 1)
                                <option value="{{ $pref->id }}">{{ $pref->pref }}</option>
                            @endunless
                        @endforeach
                    </select>

                    <select name="part_id">
                        <option value="">パート</option>
                        @foreach ($parts as $part)
                            @unless($part->id === 1)
                                <option value="{{ $part->id }}">{{ $part->part }}</option>
                            @endunless
                        @endforeach
                    </select>

                    <p></p>

                    <input type="submit" value="検索">
                </form>
        </div>
    </div>

    <div class="col-sm-12 col-md-8">
        <div class="container">
            <p></p>
                <h3>トップページ</h3>
                <p>サンプルメールアドレス：1@1</p>
                <p>サンプルパスワード:11111111</p>
                <div>
                    <a href='{{ route("list") }}'>記事一覧</a>
                </div>
                    @auth
                        <div>
                            <a href='{{ route("mypage") }}'>マイページ</a>
                        </div>
                    @endauth
                </div>
        </div>
    </div>
@endsection

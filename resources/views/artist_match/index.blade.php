@extends('layouts.layout')

@section('title', 'top')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-4">
        <div class="container">
            <p></p>
            <h4>ユーザー検索</h4>
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

                    <input type="submit" value="検索">
                </form>
        </div>
    </div>

    <div class="col-sm-12 col-md-8">
        <div class="container">
            <p></p>
                <h1>トップページ</h1>
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

@extends('layouts.layout')

@section('title', 'show')

@section('content')
<div class="row">
    <div class="col-sm-12 col-md-2">
        <div class="container">
          <p></p>
          <h5>ユーザー検索</h5>
                <form action="{{ route('list') }}" method="get">
                    <input type="text" name="search_word">

                    <select name="pref_id">
                        <option value="">都道府県</option>
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
        <h3>記事一覧</h3>
        <table class="table">
          <tr>
            <th>名前</th>
            <th>パート</th>
            <th>活動地域</th>
            <th></th>
          </tr>
            @foreach($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->part->part }}</td>
                <td>{{ $user->pref->pref }}</td>
                <td><a href="{{ route("show", ['id'=>$user->id]) }}">詳細画面へ</a></td>
              </tr>
            @endforeach
        </table>
        <p></p>
        {{ $users->links() }}
        <p></p>
        <a href="{{ route('index') }}">トップページに戻る</a>
    </div>
</div>
@endsection

@extends('layouts.layout')

@section('title','編集ページ')

@section('content')
<div class="justify-content-center">

  <h1>プロフィールを登録してください</h1>
  <h3>{{ $user->name }}さん</h3>
  <table>
    <form action="new" method="POST">
      @csrf
      <input type="hidden" name="user_id" value="{{ $user->id }}">
      <tr>
        <th>活動地域</th>
        <td>
          <select name="pref_id">
            @foreach ($prefs as $pref)
              <option value="{{ $pref->id }}">{{ $pref->pref }}</option>
            @endforeach
          </select>
        </td>
      </tr>

      <tr>
        <th>パート</th>
        <td>
          <select name="part_id">
            @foreach ($parts as $part)
              <option value="{{ $part->id }}">{{ $part->part }}</option>
            @endforeach
          </select>
        </td>
      </tr>

      <tr>
        <th>自己紹介</th>
        <td><textarea name="introduction" cols="30" rows="10"></textarea></td>
      </tr>

      <tr>
        <th>Twitterアカウント</th>
        <td><input type="text" name="twitter"></td>
      </tr>

      <tr>
        <th>Youtubeチャンネル</th>
        <td><input type="text" name="youtube"></td>
      </tr>

      <tr>
        <th></th>
        <td><input type="submit" value="送信"></td>
      </tr>
    </form>
  </table>
</div>
@endsection

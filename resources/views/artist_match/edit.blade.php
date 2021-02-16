@extends('layouts.layout')

@section('title','編集ページ')

@section('content')

<h1>編集ページ</h1>
<h3>{{ $user->name }}さん</h3>
<table>
<form action="edit" method="POST">
  @csrf
  <input type="hidden" name="user_id" value="{{ $user->id }}">
  <tr>
    <th>名前</th>
    <td><input type="text" name='name' value="{{$user->name }}"></td>
  </tr>

  <tr>
    <th>活動地域</th>
    <td>
      <select name="pref_id">
        @foreach ($prefs as $pref)
          @if ($pref->id == $user->pref_id)
            <option value="{{ $pref->id }}" selected>{{ $pref->pref }}</option>
          @else
            <option value="{{ $pref->id }}">{{ $pref->pref }}</option>
          @endif
        @endforeach
      </select>
    </td>
  </tr>

  <tr>
    <th>パート</th>
    <td>
      <select name="part_id">

        @foreach ($parts as $part)
          @if ($part->id == $user->part_id)
            <option value="{{ $part->id }}" selected>{{ $part->part }}</option>
          @else
            <option value="{{ $part->id }}">{{ $part->part }}</option>
          @endif
        @endforeach

      </select>
    </td>
  </tr>

  <tr>
    <th>自己紹介</th>
    <td><textarea name="introduction" cols="30" rows="10" >{{ $user->introduction->introduction }}</textarea></td>
  </tr>

  <tr>
    <th>Twitter</th>
    <td><input type="text" name="twitter" value="{{ $user->introduction->twitter }}"></td>
  </tr>

  <tr>
    <th>Youtube</th>
    <td><input type="text" name="youtube" value="{{ $user->introduction->youtube }}"></td>
  </tr>

  <tr>
    <th></th>
    <td><input type="submit" value="送信"></td>
  </tr>
</form>
</table>
<a href="{{ route('index') }}">トップページに戻る</a>

@endsection

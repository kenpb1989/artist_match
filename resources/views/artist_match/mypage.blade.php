@extends('layouts.layout')

@section('title', 'mypage')

@section('content')
<h1>マイページ</h1>
<table>
  <tr>
    <th>名前：</th>
    <td>{{ $user->name }}</td>
  </tr>

  <tr>
    <th>活動地域</th>
    <td>{{ $user->pref->pref }}</td>
  </tr>

  <tr>
    <th>パート：</th>
    <td>{{ $user->part->part }}</td>
  </tr>

  <tr>
    <th>自己紹介：</th>
    <td>{{ $user->introduction->introduction }}</td>
  </tr>

  <tr>
    <th>Twitter：</th>
    <td>{{ $user->introduction->twitter }}</td>
  </tr>

  <tr>
    <th>Youtube：</th>
    <td>{{ $user->introduction->youtube }}</td>
  </tr>

  <tr>
    <th></th>
    <td><a href='{{ route("edit") }}'>編集する</a></td>
  </tr>
</table>
<a href="{{ route('index') }}">トップページに戻る</a>


@endsection

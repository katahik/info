@extends('layout')

@section('content')

    <div>{{ $info_post->title }}</div>
    <div>{{ $info_post->body }}</div>
    <div>投稿者：{{ $info_post->user->name }}</div>
    @if($info_post->user_id == $login_user_id)
    <div>
    <a href="{{ route('edit',['id'=>$info_post->id])}}">編集</a>
    <a href="{{ route('delete',['id'=>$info_post->id])}}">削除</a>
    </div>
    @endif


@endsection
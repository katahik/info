@extends('layout')

@section('content')

    <div>
    <a href="{{ route('create') }}">連絡ポストを追加</a>
    </div>
    @foreach($info_posts as $info_post)
    <div>
        <span>{{ $info_post->title }}</span>
        <span>{{ $info_post->body }}</span>
        <span>{{ $info_post->user->name }}</span>
        <a href="{{ route('show',['id'=>$info_post->id]) }}">個別ページへ</a>
    </div>
    @endforeach



@endsection
@extends('layout')

@section('content')

    <form method="POST" action="{{ route('update',['id'=>$info_post->id])}}">
    @csrf
    <div>
        <input type="text" name="title" value="{{ $info_post->title }}"></input>
    </div>
    <div>
        <textarea name="body" rows="4">{{ $info_post->body }}</textarea>    
    </div>
    <div>
        <button type="submit">更新</button>
        <a href="{{ route('index') }}">キャンセル</a>
    </div>

    </form>



@endsection
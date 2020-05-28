@extends('layout')

@section('content')

    <form method="POST" action="{{ route('store') }}">
    @csrf
    <div>
        <input type="text" name="title"></input>
    </div>
    <div>
        <textarea name="body" rows="4"></textarea>    
    </div>
    <div>
        <button type="submit">作成</button>
        <a href="{{ route('index') }}">キャンセル</a>
    </div>

    </form>



@endsection
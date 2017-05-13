@extends('blog::layouts.master')

@section('content')
    <h1>Hello World</h1>
    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p>
    @foreach($posts as $post)
        <ul>
            <li><h1>{{$post->title}}</h1></li>
            <li><p>{{$post->body}}</p></li>
        </ul>
        <hr>
    @endforeach
@stop

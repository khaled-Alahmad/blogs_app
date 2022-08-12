

{{--<x-layout>--}}
{{--        <article>--}}
{{--            <h1>--}}
{{--                {{ $post_content->title }}--}}
{{--            </h1>--}}
{{--            <img src="{{ $post_content->image }}" alt="">--}}
{{--            <p>--}}
{{--                {!! $post_content->body !!}--}}
{{--            </p>--}}
{{--        </article>--}}

{{--        <a href="/">Go Back</a>--}}
{{--</x-layout>--}}
@extends('components.layout')
@section('content')
<article>
            <h1>
                {{ $post_content->title }}
            </h1>
    <div>
        by {{$post_content->user->name}}
    </div>
    <span style="font-size: 15px">
        <a href="categories/{{$post_content->category->id}}" style="text-decoration: none;color: darkblue" >  {{$post_content->category->name}} </a>
    </span>
            <img src="{{ $post_content->image }}" alt="">
            <p>
                {!! $post_content->body !!}
            </p>
        </article>

        <a href="/">Go Back</a>
@endsection

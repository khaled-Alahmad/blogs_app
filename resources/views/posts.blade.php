@extends('components.layout')


@section('header-section')
    <nav>
        <h1>Logo</h1>
    </nav>
@endsection

@section('content')
            @foreach($posts as $post)
                <article>
                    <h1>
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>
                    <span style="font-size: 15px;">
                        <a href="/categories/{{$post->category->id}}">   {{$post->category->name}}  </a>
                    </span>

                    <p>
                        {{ $post->excerpt }}
                    </p>
                </article>
            @endforeach
@endsection

{{--@section('footer-section')--}}
{{--    <div>--}}
{{--        <table>--}}
{{--            --}}
{{--        </table>--}}
{{--    </div>--}}
{{--@endsection--}}




{{-- attribute method --}}
{{--<x-layout body="Hello Dear Students">--}}

{{--</x-layout>--}}


{{-- slot method --}}
{{--<x-layout>--}}
{{--    <x-slot name="body">--}}
{{--        @foreach($posts as $post)--}}
{{--            <article>--}}
{{--                <h1>--}}
{{--                    <a href="/posts/{{ $post->slug }}">--}}
{{--                        {{ $post->title }}--}}
{{--                    </a>--}}
{{--                </h1>--}}

{{--                <p>--}}
{{--                    {{ $post->excerpt }}--}}
{{--                </p>--}}
{{--            </article>--}}
{{--        @endforeach--}}
{{--    </x-slot>--}}
{{--</x-layout>--}}


{{-- default slot variable --}}
{{--<x-layout>--}}
{{--    @foreach($posts as $post)--}}
{{--        <article style="{{$loop->even ? 'background-color: red; padding:6px' : ''}}">--}}
{{--    <article>--}}
{{--            <h1>--}}
{{--            <a href="/posts/{{$post->slug}}">--}}
{{--                {{ $post->title }}--}}
{{--                </a>--}}
{{--            </h1>--}}
{{--            <p>--}}
{{--                {{ $post->excerpt }}--}}
{{--            </p>--}}
{{--        </article>--}}
{{--    @endforeach--}}
{{--</x-layout>--}}

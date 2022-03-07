<x-layout>
    @include ('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">No posts yet. Please check back later</p>
        @endif



    </main>

{{--        @foreach ($posts as $post)--}}
{{--            <article>--}}

{{--                <a href="/posts/{{ $post->slug }}">--}}
{{--                    <h1>{{ $post->title }}</h1>--}}
{{--                </a>--}}
{{--                <p>--}}
{{--                    By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>--}}
{{--                </p>--}}

{{--                <div>--}}
{{--                    {{ $post->excerpt }}--}}
{{--                </div>--}}
{{--            </article>--}}
{{--        @endforeach--}}
</x-layout>




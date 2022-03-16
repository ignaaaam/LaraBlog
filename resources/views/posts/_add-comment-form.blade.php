@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img class="rounded-xl" src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt=""
                     width="40" height="40">
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                                <textarea
                                    name="body"
                                    class="w-full text-sm focus:outline-none focus:ring"
                                    rows="5"
                                    placeholder="Quick, think of something to say!"
                                    required></textarea>

                @error('body')
                <span class="text-xs text-red-500"> {{ $message }} </span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200 ">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p class="border border-gray-200 rounded-md p-6">
        <a class="text-blue-500 font-bold transition hover:text-blue-600" href="/register">Register</a> or <a class="text-blue-500 font-bold transition hover:text-blue-600" href="/login">Login</a> to leave a comment!
    </p>

@endauth

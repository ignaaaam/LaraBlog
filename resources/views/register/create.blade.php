<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
            <h1 class="text-center font-bold text-xl">Regsiter</h1>
                <form action="/register" method="POST" class="mt-10">
                    @csrf

                    <x-form.input name="name" autocomplete="name" type="text"></x-form.input>
                    <x-form.input name="username" autocomplete="username" type="text" ></x-form.input>
                    <x-form.input name="email" autocomplete="email" type="username" ></x-form.input>
                    <x-form.input name="password" autocomplete="new-password" type="password"></x-form.input>

                    <x-form.button>Submit</x-form.button>


                    {{-- HOW TO DISPLAY ERRORS AT BOTTOM --}}
    {{--                @if($errors->any())--}}
    {{--                    <ul>--}}
    {{--                        @foreach($errors->all() as $error)--}}
    {{--                            <li class="text-red-500 text-xs">{{ $error }}</li>--}}
    {{--                        @endforeach--}}
    {{--                    </ul>--}}
    {{--                @endif--}}
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>

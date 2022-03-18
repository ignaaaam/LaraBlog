<x-layout>

    <section class="px-6 py-8">
        <x-panel class="max-w-lg mx-auto">
        <form action="/admin/posts" method="POST">
            @csrf

            <div class="mb-6">
                <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    title
                </label>
                <input class="border border-gray-400 p-2 w-full rounded"
                type="text"
                name="title"
                id="title"
                required
                >

                @error('title')
                    <p  class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    excerpt
                </label>
                <input class="border border-gray-400 p-2 w-full rounded"
                type="text"
                name="excerpt"
                id="excerpt"
                required
                >

                @error('excerpt')
                    <p  class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    body
                </label>
                <textarea class="border border-gray-400 p-2 w-full" name="body" id="body"></textarea>

                @error('body')
                    <p  class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="category" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Category
                </label>

                <select name="category" id="category">

                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                @error('category')
                <p  class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <x-submit-button>Publish</x-submit-button>
        </form>
        </x-panel>
    </section>
</x-layout>

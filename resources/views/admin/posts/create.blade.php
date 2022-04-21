<x-layout>

    <x-setting heading="Publish New Post">
        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thumbnail" type="file" />
            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />

            <x-form.field>
                <x-form.label name="tag" />
                <select name="tag_id" id="tag_id" class="border border-gray-400 p-2 rounded">

                    @foreach(\App\Models\Tag::all() as $tag)
                        @foreach($tag->posts as $post_tag)
                            @php
                                echo $post_tag->id
                            @endphp
                        @endforeach
{{--                            <option--}}

{{--                                value="{{ $tag->id }}"--}}
{{--                                {{ old('tag_id') === $tag->id ? 'selected' : '' }}--}}
{{--                            >{{ ucwords($tag->name) }}</option>--}}
                    @endforeach
                </select>

                <x-form.error name="tag" />
            </x-form.field>

            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>


</x-layout>

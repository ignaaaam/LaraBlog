@props(['tag'])

<a href="/?tag={{ $tag  }}"
   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold transition hover:bg-blue-500 hover:text-white"
   style="font-size: 10px">{{ $tag }}</a>


<?php

namespace App\View\Components;

use App\Models\Tag;
use Illuminate\View\Component;

class TagDropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tag-dropdown', [
            'tags' => Tag::all(),
            'currentTag' => Tag::firstWhere('name', request('tag'))
        ]);
    }
}

<?php

namespace App\View\Components;

use App\Models\Photo;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PhotoCard extends Component
{
    /**
     * Create a new component instance.
     */
    public Photo $photo;
    public function __construct(Photo $photo )
    {
         $this->photo = $photo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.photo-card');
    }
}

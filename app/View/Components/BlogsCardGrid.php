<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogsCardGrid extends Component
{
    public $date;
    public $image;
    public $title;
    public $alt;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $date = "", 
        $image = "", 
        $title = "",
        $alt = "",
    )
    {
        $this->date = $date;
        $this->image = $image;
        $this->title = $title;
        $this->alt = $alt;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blogs-card-grid');
    }
}

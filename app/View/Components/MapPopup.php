<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MapPopup extends Component
{
    public $title;
    public $desc;
    public $note;
    public $images;
    public $alt;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $title = "",
        $desc = "",
        $note = "",
        $images = "",
        $alt = "",
    )
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->note = $note;
        $this->images = $images;
        $this->alt = $alt;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.map-popup');
    }
}

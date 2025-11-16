<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MapMarker extends Component
{
    public $xpos;
    public $ypos;
    public $title;
    public $desc;
    public $note;
    public $images;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $xpos = "", 
        $ypos = "", 
        $title = "", 
        $desc = "", 
        $note = "", 
        $images = "",
    )
    {
        $this->xpos = $xpos;
        $this->ypos = $ypos;
        $this->title = $title;
        $this->desc = $desc;
        $this->note = $note;
        $this->images = $images;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.map-marker');
    }
}

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
    public $teaser;
    public $desc;
    public $note;
    public $images;
    public $alt;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $xpos = "", 
        $ypos = "", 
        $title = "", 
        $teaser = "", 
        $desc = "", 
        $note = "", 
        $images = "",
        $alt = "",
    )
    {
        $this->xpos = $xpos;
        $this->ypos = $ypos;
        $this->title = $title;
        $this->teaser = $teaser;
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
        return view('components.map-marker');
    }
}

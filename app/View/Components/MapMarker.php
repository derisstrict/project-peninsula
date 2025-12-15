<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MapMarker extends Component
{
    public $xpos;
    public $ypos;
    public $l10nTitle;
    public $l10nTeaser;
    public $l10nDescription;
    public $l10nNote;
    public $images;
    public $alt;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $xpos = "", 
        $ypos = "", 
        $l10nTitle = "", 
        $l10nTeaser = "", 
        $l10nDescription = "", 
        $l10nNote = "", 
        $images = "",
        $alt = "",
    )
    {
        $this->xpos = $xpos;
        $this->ypos = $ypos;
        $this->l10nTitle = $l10nTitle;
        $this->l10nTeaser = $l10nTeaser;
        $this->l10nDescription = $l10nDescription;
        $this->l10nNote = $l10nNote;
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

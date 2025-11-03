<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EventsCard extends Component
{
    public $date;
    public $image;
    /**
     * Create a new component instance.
     */
    public function __construct($date = "", $image = "")
    {
        $this->date = $date;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.events-card');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EventsCard extends Component
{
    public $date;
    public $image;
    public $price;
    public $alt;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $date = "", 
        $image = "",
        $price = "",
        $alt = ""
    )
    {
        $this->date = $date;
        $this->image = $image;
        $this->price = $price;
        $this->alt = $alt;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.events-card');
    }
}

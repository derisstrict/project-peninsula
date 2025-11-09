<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardEventsCard extends Component
{
    public $date;
    public $image;
    public $price;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $date = "", 
        $image = "",
        $price = ""
    )

    {
        $this->date = $date;
        $this->image = $image;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-events-card');
    }
}

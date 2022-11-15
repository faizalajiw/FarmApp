<?php

namespace App\View\Components\Utilities;

use Illuminate\View\Component;

class Counter extends Component
{
    public $icon;
    public $title;
    public $total;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon, $title, $total)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->total = $total;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.utilities.counter');
    }
}

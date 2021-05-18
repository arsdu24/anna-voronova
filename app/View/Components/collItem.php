<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CollItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $img;
    public $route;
    public function __construct($title,$route,$img)
    {
        $this->title=$title;
        $this->img=$img;
        $this->route=$route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.coll-item');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class listLink extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $href;
    public $class;
    public function __construct($title,$href,$class)
    {
        $this->href=$href;
        $this->title=$title;
        $this->class=$class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.list-link');
    }
}

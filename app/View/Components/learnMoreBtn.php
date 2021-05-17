<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LearnMoreBtn extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $href;
    public function __construct($href)
    {
        $this->href=$href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.learn-more-btn');
    }
}

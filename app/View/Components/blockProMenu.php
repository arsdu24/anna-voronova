<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlockProMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $img;
    public $href;
    public $price;
    public function __construct($title,$img,$href,$price)
    {
        $this->title=$title;
        $this->img=$img;
        $this->href=$href;
        $this->price=$price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.block-pro-menu');
    }
}

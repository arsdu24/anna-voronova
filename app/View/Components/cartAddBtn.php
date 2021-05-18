<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CartAddBtn extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $value;
    public $type;
    public $href;
    public function __construct($value,$type="add",$href="")
    {
        $this->value=$value;
        $this->type=$type;
        $this->href=$href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.cart-add-btn');
    }
}

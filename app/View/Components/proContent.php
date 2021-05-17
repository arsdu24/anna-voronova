<?php

namespace App\View\Components;

use Illuminate\View\Component;

class proContent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $price;
    public $href;
    public $oldmoney;
    public $money;
    public function __construct($name,$price="",$href,$oldmoney="$0.00",$money="$0.00")
    {
        $this->name=$name;
        $this->price=$price;
        $this->href=$href;
        $this->oldmoney=$oldmoney;
        $this->money=$money;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.pro-content');
    }
}

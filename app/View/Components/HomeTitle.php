<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HomeTitle extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public  $test;
    public $value;
    public function __construct($value, $test)
    {
        $this->value = $value;
        $this->test = $test;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.home-title');
    }
}

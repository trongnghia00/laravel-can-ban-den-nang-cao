<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        <div>
            <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
        </div>
        blade;
    }
}

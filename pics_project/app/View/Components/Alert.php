<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $dismissible;

    protected $types = ['success', 'danger', 'warning', 'info'];

    protected $classes = ['alert'];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'info', $dismissible = false)
    {
        $this->type = in_array($type, $this->types) ? $type : 'info';
        $this->classes[] = "alert-{$this->type}";
        if ($dismissible) {
            $this->classes[] = 'alert-dismissible fade show';
        }
        $this->dismissible = $dismissible;
    }

    public function getClasses()
    {
        return join(" ", $this->classes);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadCrumb extends Component
{

    public $crumb = array();
    /**
     * Create a new component instance.
     */
    public function __construct($crumb = NULL)
    {
        $crumb = explode(",", $crumb);
        $this->crumb = $crumb;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bread_crumb');
    }
}

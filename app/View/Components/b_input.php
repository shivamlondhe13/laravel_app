<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class b_input extends Component
{
    public $name;
    public $type;
    public $id;
    public $label;
    public $value;
    public $required;
    /**
     * Create a new component instance.
     */
    public function __construct($name = "", $type = "text", $id = "", $label = "", $value = "", $required = "")
    {
        $this->name = $name;
        $this->type = $type;
        $this->id = $id;
        $this->label = $label;
        $this->value = $value;
        $this->required = $required;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.b_input');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavBar extends Component
{
    public $you; public $uid;
    /**
     * Create a new component instance.
     */
    public function __construct($you, $uid)
    {
        $this->you = $you;
        $this->uid = $uid;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-bar');
    }
}

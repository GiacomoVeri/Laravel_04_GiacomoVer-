<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainLayout extends Component
{
    public $pageTitle;

    public function __construct($t)
    {
        $this->pageTitle = $t;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-layout');
    }
}

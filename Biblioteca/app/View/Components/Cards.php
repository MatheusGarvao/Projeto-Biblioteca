<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Cards extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $projeto;

    public function __construct($projeto)
    {
        $this->projeto = $projeto;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class dashboard extends Component
{   
     /**
     * The total numbers of dahsboard.
     *
     * @var string
     */
    public $totalPerson;
    public $totalCompany;
    public $totalBalance;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($totalPerson,$totalCompany,$totalBalance)
    {
        $this->totalPerson=$totalPerson;
        $this->totalCompany=$totalCompany;
        $this->totalBalance=$totalBalance;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard');
    }
}

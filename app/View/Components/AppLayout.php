<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component {
	public $title; //make this title property accessible outside the class
	//
	public function __construct($title = null) {
		$this->title = $title; //get the title of current page
	}

	/**
	 * Get the view / contents that represent the component.
	 */
	public function render(): View | Closure | string {
		return view('components.app-layout');
	}
}

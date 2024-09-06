<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller {
	public function store(Request $request) {
		return response()->json(['success' => true, 'message' => 'at portfolio controller']);
	}
}

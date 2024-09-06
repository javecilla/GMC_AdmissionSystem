<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionPageController extends Controller {
	public static function index(Request $request) {
		return view('contents.admissions.index');
	}
}

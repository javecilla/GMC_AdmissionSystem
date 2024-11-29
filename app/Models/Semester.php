<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model {
	//use HasFactory;

	protected $table = 'semester';
	protected $primaryKey = 'semester_no ';

	protected $fillable = [
		'semester',
		'semester_name',
		'campus_category',
	];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearLevel extends Model {
	//use HasFactory;

	protected $table = 'year_levels';
	protected $primaryKey = 'id ';

	protected $fillable = [
		'name',
		'campus_category',
	];
}
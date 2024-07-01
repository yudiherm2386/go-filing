<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class InputTypes extends Model
{
	protected $table = 'input_types';
	protected $primaryKey = 'input_type_id';
    protected $fillable = [
        'name','sort'
    ];
	
	public $timestamps = false;
	public function hasProjectProperty() {
		return $this->hasMany('\App\Models\ProjectProperties', 'input_type_id', 'input_type_id');
	}
}

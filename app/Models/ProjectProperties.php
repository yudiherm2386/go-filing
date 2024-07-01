<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProjectProperties extends Model
{
	protected $table = 'project_properties';
	protected $primaryKey = 'project_property_id';
    protected $fillable = [
        'function_id','title','description','data','input_type_id','sort','source_id','is_label',
		'is_mandatory','is_table_list','is_filter','is_advanced_search', 'is_unique',
		'created_at','created_by','updated_at','updated_by'
    ];
	
	public $timestamps = false;
	public function hasFunction() {
		return $this->belongsTo('\App\Models\Functions', 'function_id', 'function_id');
	}
	public function hasInputType() {
		return $this->belongsTo('\App\Models\InputTypes', 'input_type_id', 'input_type_id');
	}
	public function userCreated() {
		return $this->belongsTo('\App\Models\Users', 'created_by', 'user_id');
	}
	public function userUpdated() {
		return $this->belongsTo('\App\Models\Users', 'updated_by', 'user_id');
	}
	public function source() {
		return $this->belongsTo('\App\Models\DropdownTable', 'source_id', 'dropdown_table_id');
	}
}

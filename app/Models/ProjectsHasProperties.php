<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProjectsHasProperties extends Model
{
	protected $table = 'projects_has_properties';
	protected $primaryKey = 'project_has_property_id';
    protected $fillable = [
        'project_id','project_property_id','input_type_id','value','value_text'
    ];
	
	public $timestamps = false;
	public function hasProperty() {
		return $this->belongsTo('\App\Models\ProjectProperties', 'prooject_property_id', 'project_property_id');
	}
	public function hasInputType() {
		return $this->belongsTo('\App\Models\InputTypes', 'input_type_id', 'input_type_id');
	}
}

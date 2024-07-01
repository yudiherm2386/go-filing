<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
	protected $table = 'documents';
	protected $primaryKey = 'document_id';
    protected $fillable = [
        'project_id','box_id','function_id','file_name','file_name_ori','file_name_ocr','created_at',
		'created_by','updated_at','updated_by'
    ];
	
	public $timestamps = false;
	
	public function hasBox() {
		return $this->belongsTo('\App\Models\Boxs', 'box_id', 'box_id');
	}
	public function userCreated() {
		return $this->belongsTo('\App\Models\Users', 'created_by', 'user_id');
	}
	public function userUpdated() {
		return $this->belongsTo('\App\Models\Users', 'updated_by', 'user_id');
	}
	public function hasFunction() {
		return $this->belongsTo('\App\Models\Functions', 'function_id', 'function_id');
	}
}

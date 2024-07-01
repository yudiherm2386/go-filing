<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DropdownTables extends Model
{
	protected $table = 'dropdown_tables';
	protected $primaryKey = 'dropdown_table_id';
    protected $fillable = [
        'name','table_name','field_id','field_name', 'parent'
    ];
	
    public $timestamps = false;
    
    public function hasParent(){
        return $this->belongsTo(self::class, 'parent');
    }
}

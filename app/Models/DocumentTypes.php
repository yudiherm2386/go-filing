<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DocumentTypes extends Model
{
	protected $table = 'document_types';
	protected $primaryKey = 'document_type_id';
    protected $fillable = [
        'name','multiplier'
    ];
	
	public $timestamps = false;
}

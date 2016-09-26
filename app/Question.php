<?php

namespace OneThousand;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
    	'question', 'section_id',
    ];

    public function section()
    {
    	return $this->belongsTo('OneThousand\Section');
    }
}

<?php

namespace OneThousand;

use Illuminate\Database\Eloquent\Model;
use OneThousand\Services\Markdowner;

class Question extends Model
{
    protected $fillable = [
    	'question', 'section_id', 'description',
    ];

    public function section()
    {
    	return $this->belongsTo('OneThousand\Section');
    }

    public function setDescriptionAttribute($value)
    {
    	$markdown = new Markdowner();

    	$this->attributes['description'] = $markdown->toHTML($value);
    }
}

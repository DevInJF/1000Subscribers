<?php

namespace OneThousand;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
    	'title', 'module_id',
    ];

    public function module()
    {
    	return $this->belongsTo('OneThousand\Module');
    }

    public function questions()
    {
    	return $this->hasMany('OneThousand\Question');
    }
}

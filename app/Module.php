<?php

namespace OneThousand;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
    	'title', 'number',
    ];

    public function sections()
    {
    	return $this->hasMany('OneThousand\Section');
    }
}

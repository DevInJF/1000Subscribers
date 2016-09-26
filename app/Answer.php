<?php

namespace OneThousand;

use Illuminate\Database\Eloquent\Model;
use OneThousand\Services\Markdowner;

class Answer extends Model
{
    protected $fillable = [
    	'answer', 'user_id', 'question_id',
    ];

    public function question()
    {
    	return $this->belongsTo('OneThousand\Question');
    }

    public function user()
    {
    	return $this->belongsTo('OneThousand\User');
    }

    public function setAnswerAttribute($value)
    {
    	$markdown = new Markdowner();

    	$this->attributes['answer'] = $markdown->toHTML($value);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question()
    {
        $this->belongsTo(Question::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function getBodyHtmlAttribute(): string
    {
        return \Parsedown::instance()->text($this->body);
    }
}

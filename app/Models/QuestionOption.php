<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    // use HasFactory;

    protected $fillable = ['question_id', 'option_text'];

    public function question()
    {
        return $this->belongsTo(CategoryQuestion::class);
    }
}

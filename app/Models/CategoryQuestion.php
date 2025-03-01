<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryQuestion extends Model
{
    protected $fillable = ['service_id', 'question_text'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // A question has many options
    public function options()
    {
        return $this->hasMany(Option::class);
    }
}

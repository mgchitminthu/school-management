<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    public function student()
    {
        return $this->belongsTo("\App\Models\Student");
    }

    public function course()
    {
        return $this->belongsTo("\App\Models\Course");
    }
}

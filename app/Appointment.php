<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
    public function professional()
    {
        return $this->belongsTo('App\Professional');
    }
}

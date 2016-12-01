<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuxiliaryExams extends Model
{
    // Deseo que se considere en la respuesta del JSON el acceso created_date
    protected $appends = ['created_date'];

    public function getCreatedDateAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }
}
